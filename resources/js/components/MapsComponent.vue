<template>
    <div> 
        <div id='map' class='map' ref="mapRef"></div>
    </div>
</template>

<script>
import tt from '@tomtom-international/web-sdk-maps';
export default {
    props:{
        apartment: Object,//città trovata attraverso l'input
    },
    data() {
        return {
        map: null,
        lat: this.apartment.latitude,
        lon: this.apartment.longitude,
        }
    },
    mounted() {
        this.initializeMap();
        // console.log(this.lat," & ", this.lon); //45.4855254 ' & ' 9.231835
    },
    // npm i @tomtom-international/web-sdk-maps
    // npm i @tomtom-international/web-sdk-services
    methods: {
        initializeMap() { 
            this.map = tt.map({
            key: 'QP8w5tRMWAql5zBK3TpGZWGKdO1Ls5AI',
            container: this.$refs.mapRef,
            center: [ this.lon,this.lat],//longitudine , latitudine
            zoom: 17
        });
        //marker visualizzato sulla mappa
        new tt.Marker()
        .setLngLat([ this.lon,this.lat])
        .addTo(this.map);
        },
    }
}
</script>
<style scoped lang="scss">
#map{
    width: 100%;
    height: 512px;
}
</style>
