<template>
    <div>


    </div>
</template>

<script>
    export default {

        data() {
            return {
                apartments: [],
                city: "",
            };
        },

        mounted() {
            axios.get('/apartment/get')
            .then( r => console.log(r.data))
            .catch( e => console.log(e))
        },
    }
</script>
