<template>
    <div class="container my-5 ">
        <h2 class="fw-bold fs-1 text-success">Appartamenti sponsorizzati</h2>
        <div class="row border border-warning border-3 rounded-3 py-5 px-3">
            <div class="col-lg-4 col-sm-12 container-apart-home"
            v-for="apartment in sponsoredApartments" :key="apartment.sponsoredApartment.id">
                <a :href="'show/' + apartment.sponsoredApartment.id">
                    <div class="style-home-spons">
                        <img class="img-preview img-home" :src="apartment.sponsoredApartment.image" alt="">
                    </div>
                    <div class="text-home-apart">
                        Description: {{apartment.sponsoredApartment.description }} <br>
                        City: {{apartment.sponsoredApartment.city}} <br>
                    </div>
                </a>              
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                sponsoredApartments: [],
            }
        },
        created() {
            axios.get(`/axios/sponsoredapartment`)
            .then(r => {
                this.sponsoredApartments = r.data;
                // console.log(r.data);
                this.sponsoredApartments.forEach(item =>  {
                    item.sponsorships_id.forEach(sponsor => {
                        
                        console.log(sponsor);
                        // console.log("id",sponsor.id , "sponsor type: ",sponsor.sponsorship_id , "apartment type: ", sponsor.apartment_id);
                    })
                    
                })
            })
            .catch(e => console.log(e))
        },
        methods: {
           
        },
    }
</script>
