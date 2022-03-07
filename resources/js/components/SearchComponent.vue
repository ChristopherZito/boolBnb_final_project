<template>
    <div>
        <!-- filtri stanze, letti, raggio distanza -->
        <div class="d-flex my-3">
            <!-- filtro stanze -->
            <div class="mx-3">
                <h6>Minimo {{rooms}} <span v-if="rooms === 1">stanza</span> <span v-if="rooms > 1">stanze</span></h6>
                <span class="py-2 px-3 rounded-circle bg-info" @click="rooms > 1 ? rooms-- : rooms">-</span>
                <span class="py-2 px-3 rounded-circle bg-info" @click="incrementRooms()">+</span>
            </div>
            <!-- filtro letti -->
            <div  class="mx-3">
                <h6>Minimo {{beds}} <span v-if="beds === 1">letto</span> <span v-if="beds > 1">letti</span></h6>
                <span class="py-2 px-3 rounded-circle bg-info" @click="beds > 1 ? beds-- : beds">-</span>
                <span class="py-2 px-3 rounded-circle bg-info" @click="incrementBeds()">+</span>
            </div>
        </div>
        <!-- show all the optionals for the advance search -->
        <div class="text-light">
            <span  v-for="optional in optionals" :key="optional.id">
                <span class="d-inline-block rounded m-1 p-2 btn" :class="selectedOptionals.includes(optional.id) ? 'btn-success' : 'bg-info'"
                @click="selectedOptional(optional.id)">
                     {{optional.name}}
                </span> 
            </span> 
        </div>
        <!-- show apartments from the searched city -->
        <section class="bg-success p-5 d-flex flex-wrap">
            <div 
            v-for="result in filteredListofApartments" :key="result.apartment.id"
            class="col-6 py-2 border border-dark">
                <!-- se la lista di appartamenti da mostrare oppure se questo appartamento fa parte della lista di quelli da mostrare -->
                <div class="img-container">
                    <a :href="'show/'+ result.apartment.id"><img class="img img-fluid" :src="result.apartment.image" alt=""></a>
                </div>
                <div>
                    <span class="text-dark"> Descrizione: </span>{{result.apartment.description}} <br>
                    <span class="text-dark"> Città: </span>{{result.apartment.city}} <br>
                    <span class="text-dark"> Stanze: </span>{{result.apartment.rooms}} <br>
                    <span class="text-dark"> Letti: </span>{{result.apartment.beds}} <br>
                    <span class="text-dark"> Bagni: </span>{{result.apartment.bathrooms}} <br>
                    <span class="text-dark"> Indirizzo: </span>{{result.apartment.address}} <br>
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
                beds: 1
            }
        },
        mounted(){
            this.getOptionalsApi()
            axios.get(`/${this.city}/apartment/optionals`)
            .then(r => {
                this.apartmentsWithOptionals=r.data;
            })
            .catch(e => console.log(e));
        },
        computed: {
            apartmentsToShow() {
                let apartmentsToShow = [];
                console.log("room:" , this.rooms);
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
                console.log(this.rooms);
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
            incrementRooms() {
                this.rooms++;
            },
            incrementBeds(){
                this.beds++;
            },
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
        },
    }
</script>
