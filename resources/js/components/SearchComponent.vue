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
        <div v-if="city">
            {{city}}
        </div>
        <!-- show apartments from the searched city -->
        <!-- <section class="bg-success p-5 d-flex flex-wrap">
            <div 
            v-for="apartment in Apartments" :key="apartment.id"
            class="col-6 py-2 border border-dark">
                <div class="img-container">
                    <a :href="'show/'+ apartment.id"><img class="img img-fluid" :src="apartment.image" alt=""></a>
                </div>
                <div>
                    <span class="text-dark"> Descrizione: </span>{{apartment.description}} <br>
                    <span class="text-dark"> Città: </span>{{apartment.city}} <br>
                    <span class="text-dark"> Stanze: </span>{{apartment.rooms}} <br>
                    <span class="text-dark"> Letti: </span>{{apartment.beds}} <br>
                    <span class="text-dark"> Bagni: </span>{{apartment.bathrooms}} <br>
                    <span class="text-dark"> Indirizzo: </span>{{apartment.address}} <br>
                </div>
            </div>
        </section> -->
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
            }
        },
        mounted(){
            this.getOptionalsApi()
            ////////////////////////////////////////////////////////////////////////////////////////////////
            console.log();
            
            axios.get(`/${this.city}/apartment/optionals`)
            .then(r => {
                console.log(r.data);
            })
            .catch(e => console.log(e));
            
        },
        methods: {
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
                    this.apartmentsOptionals()
                }else{
                    this.selectedOptionals.splice(index,1); 
                }
            },
            apartmentsOptionals(){
                for (let x = 0; x < this.selectedOptionals.length; x++) {

                    const optional = this.selectedOptionals[x];
                    
                    for (let y = 0; y < this.ApartmentsOptionals.length; y++) {
                        const optionalApartment = this.ApartmentsOptionals[y];
                        
                        if(optional === optionalApartment['optional_id']){
                            // console.log("aparment_id", optionalApartment['apartment_id']);
                            if(!this.searchedApartments.includes(optionalApartment['apartment_id'])){
                                this.searchedApartments.push(optionalApartment['apartment_id']);
                            }
                        }
                    }
                }
                // console.log('appartment:',this.searchedApartments);
            }
        },
    }
</script>
