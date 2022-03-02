<template>
    <div>


    </div>
</template>

<script>
    export default {
        props:{
            apartmentList: Array,
        },
        data() {
            return {
                apartments: [],
                city: "",
            };
        },

        mounted() {
            
            console.log(this.apartments = apartmentList);
        },
        methods: {
            getItem() {
                return this.apartmentList;
            },
            setItem(apartmentList){
                this.apartments = apartmentList;
            },
        }
    }
</script>
