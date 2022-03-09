<template>
    <div>
        <div class="option-search">
            
        <!-- show all the optionals for the advance search -->

        <!-- ----------------------------------------- -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    optionals
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class=" dropdown-item-text" v-for="optional in optionals" :key="optional.id">
                        <a class="dropdown-item" href="#" :class="selectedOptionals.includes(optional.id) ? 'btn-success' : 'opt-not-sel'"
                        @click="selectedOptional(optional.id)">
                            {{optional.name}}
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <label for="">Raggio di ricerca (km)</label>
                <input type="number" name="userDistance" step="5" min="5" v-model="userDistance" @change="newDistanceValue">
            </div>


            <div class="my-3 d-flex">
                <!-- filtro stanze -->
                <div class="mx-3  style-button-search">
                    <h6>Minimo {{rooms}} <span v-if="rooms === 1">stanza</span> <span v-if="rooms > 1">stanze</span></h6>
                    <div class="style-box-plus-min">
                        <span class="py-2 px-3 style-button-beds-rooms" @click="rooms > 1 ? rooms-- : rooms">-</span>
                        <span class="py-2 px-3 style-button-beds-rooms" @click="rooms++">+</span>
                    </div>
                    
                </div>
                <!-- filtro letti -->
                <div  class="mx-3 style-button-search">
                    <h6>Minimo {{beds}} <span v-if="beds === 1">letto</span> <span v-if="beds > 1">letti</span></h6>
                    <div class="style-box-plus-min">
                        <span class="py-2 px-3 style-button-beds-rooms" @click="beds > 1 ? beds-- : beds">-</span>
                        <span class="py-2 px-3 style-button-beds-rooms" @click="beds++">+</span>
                    </div>
                </div>
            </div>
        </div>
        
        

        <!-- ----------------------------------------- -->
        <!-- <div class="text-light">
            <span  v-for="optional in optionals" :key="optional.id">
                <span class="d-inline-block rounded m-1 p-2 btn" :class="selectedOptionals.includes(optional.id) ? 'btn-success' : 'bg-info'"
                @click="selectedOptional(optional.id)">
                     {{optional.name}}
                </span> 
            </span> 
        </div> -->


        <!-- show apartments from the searched city -->
        <section class="p-5 style-list-home flex-wrap">
            <div 
            v-for="result in filteredListofApartments" :key="result.apartment.id"
            class="col-6 py-2">
                <!-- se la lista di appartamenti da mostrare oppure se questo appartamento fa parte della lista di quelli da mostrare -->
                
                <a :href="'show/'+ result.apartment.id">
                    <div class="img-container-search">
                        <img class="img img-fluid img-search" :src="result.apartment.image" alt="">
                    </div>
                </a>
                
                <div class="style-info-search">
                    <span><strong>Descrizione: </strong> </span>{{result.apartment.description}} <br>
                    <span><strong>Città: </strong></span>{{result.apartment.city}} <br>
                    <span><strong>Stanze: </strong></span>{{result.apartment.rooms}} <br>
                    <span><strong>Letti: </strong></span>{{result.apartment.beds}} <br>
                    <span><strong>Bagni: </strong></span>{{result.apartment.bathrooms}} <br>
                    <span><strong>Indirizzo: </strong></span>{{result.apartment.address}} <br>
                </div>
            </div>
            <div v-if="filteredListofApartments.length === 0">
                <h4>Ci dispiace, ma non ci sono appartamenti che soddisfano i requisiti richiesti.</h4>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        props:{
            city: String,//città trovata attraverso l'input
        },
        data() {
            return {
                optionals: [],//optional che stampiamo in pagina
                selectedOptionals: [],//array di optional selezionati dall' utente
                searchedApartments: [],
                apartmentsWithOptionals: [],
                rooms: 1,
                beds: 1,
                userDistance: 20
            }
        },
        mounted(){
            this.getOptionalsApi()
            axios.get(`/${this.city}/${this.userDistance}/apartment/optionals`)
            .then(r => {
                this.apartmentsWithOptionals=r.data;
            })
            .catch(e => console.log(e));
        },
        computed: {
            apartmentsToShow() {
                let apartmentsToShow = [];
                // console.log("room:" , this.rooms);
                this.apartmentsWithOptionals.forEach(apartmentOptionals => {
                    let optionalsOfThisApartment = apartmentOptionals.optionals_id;
                    
                    let thisApartmentHasAllOptionals = this.selectedOptionals.every(selectedOptional => {
                        return optionalsOfThisApartment.includes(selectedOptional);
                    });
                    // console.log("l'appartamento ha tutti gli optional?", thisApartmentHasAllOptionals);
                    if(thisApartmentHasAllOptionals  && apartmentOptionals.apartment.rooms >= this.rooms && apartmentOptionals.apartment.beds >= this.beds) {
                        apartmentsToShow.push(apartmentOptionals.apartment.id);
                    }
                });
                // console.log("id degli appartamenti da mostrare:", apartmentsToShow);
                return apartmentsToShow;
            },
            filteredListofApartments() {
                let filteredListofApartments = [];

                if(this.selectedOptionals.length === 0 && this.rooms === 1 && this.beds === 1) {
                    filteredListofApartments = this.apartmentsWithOptionals;
                } else {
                    this.apartmentsToShow.forEach(apartment_id => {
                        this.apartmentsWithOptionals.forEach(item => {
                            if(apartment_id === item.apartment.id) {
                                filteredListofApartments.push(item);
                            }
                        });
                    });
                }
                // console.log("lista degli appartamenti da mostrare", filteredListofApartments);
                return filteredListofApartments;
            }
        },
        methods: {
            getOptionalsApi(){
                axios.get('/optionals/get')
                .then(r => {
                    this.optionals = r.data;   
                })
                .catch(e => console.log(e))
            },
            selectedOptional(id){
                let index =  this.selectedOptionals.indexOf(id);
                if(index === -1){
                    this.selectedOptionals.push(id);
                }else{
                    this.selectedOptionals.splice(index,1); 
                }
                // console.log("id degli optional selezionati dall'utente", this.selectedOptionals);
            },
            newDistanceValue() {
                axios
                .get(`/${this.city}/${this.userDistance}/apartment/optionals`)
                .then(r => {
                    this.apartmentsWithOptionals = r.data;
                })
                .catch(e => console.log(e))
            }
        },
    }
</script>
