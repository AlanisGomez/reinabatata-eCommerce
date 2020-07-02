<template>
    <vue-tiny-slider>
        <div>Slider item #1</div>
        <div>Slider item #2</div>
        <div>Slider item #3</div>
        <div>Slider item #4</div>
        <div>Slider item #5</div>
        <div>Slider item #6</div>
    </vue-tiny-slider>
</template>

<script>
import VueTinySlider from 'vue-tiny-slider';
export default {
    props: {},
    components: {
        'vue-tiny-slider': VueTinySlider
    },

    data: function () {
        return {
        
        }
    },
}
</script>

<style lang="scss">
    @import "~tiny-slider/src/tiny-slider";
    

</style>