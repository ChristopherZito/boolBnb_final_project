<template>
    <div>
        <!-- show all the optionals for the advance search -->
        <div class="text-light">
            <span  v-for="optional in optionals" :key="optional.id">
                <span class="d-inline-block rounded bg-info m-1 p-2 btn"
                @click="selectedOptional(optional.id)">
                     {{optional.name}}
                </span> 
            </span> 
        </div>
       
       
        <!-- show apartments from the searched city -->
        <section class="bg-success p-5 d-flex flex-wrap">
            <div 
            v-for="result in apartmentsWithOptionals" :key="result.apartment.id"
            class="col-6 py-2 border border-dark">
                <div class="item" v-if="true">
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
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        props:{
            city: String,//appartamenti ricercati attraverso la città
            // ApartmentsOptionals: Array,//tabella ponte appartment_optional
        },
        data() {
            return {
                optionals: [],//optional che stampiamo in pagina
                selectedOptionals:[],//array di optional selezionati dall' utente
                searchedApartments: [],
                apartmentsWithOptionals: [],
            }
        },
        mounted(){
            this.getOptionalsApi()
            ////////////////////////////////////////////////////////////////////////////////////////////////
            console.log();
            
            axios.get(`/${this.city}/apartment/optionals`)
            .then(r => {
                this.apartmentsWithOptionals=r.data;

                // this.apartmentsWithOptionals.forEach(item => {
                //     item.apartment.show = true;
                // })
            })
            .catch(e => console.log(e));
            
        },
        // computed: {
        //     toShow() {
        //         return this.apartmentsWithOptionals.apartment.show;
        //     }
        // },
        methods: {
            toShow(id, bool) {
                let toShow;
                this.apartmentsWithOptionals.forEach(item => {
                    if(item.apartment.id === id) {
                        toShow = bool;
                    }
                });
                console.log("l'appartamento", id, "è da mostrare?", toShow);
                return toShow;
            },
            getOptionalsApi(){
                axios.get('/optionals/get')
                .then(r => {
                    // console.log(r.data);
                    this.optionals = r.data;   
                })
                .catch(e => console.log(e))
            },
            selectedOptional(id){
                // console.log(id); 
                let index =  this.selectedOptionals.indexOf(id);
                if(index === -1){
                    this.selectedOptionals.push(id);
                    // this.apartmentsOptionals()
                }else{
                    this.selectedOptionals.splice(index,1); 
                }
                console.log(this.selectedOptionals);
                this.compareSelectedOptionals();
            },
            compareSelectedOptionals() {

                this.selectedOptionals.forEach(selectedOptional => {

                    this.apartmentsWithOptionals.forEach(apartmentOptionals => {

                        let optionalsOfThisApartment = apartmentOptionals.optionals_id;

                        if(optionalsOfThisApartment.includes(selectedOptional)) {
                            // apartmentOptionals.apartment.show = true;
                            // this.$set(apartmentOptionals.apartment, 'show', true);
                            this.toShow(apartmentOptionals.apartment.id, true);
                        } else {
                            // apartmentOptionals.apartment.show = false;
                            // this.$set(apartmentOptionals.apartment, 'show', false);
                            this.toShow(apartmentOptionals.apartment.id, false);
                        }
                    });
                });
            }
        },
    }
</script>
