<template>
    <carousel
        :id="id"
        :navigationEnabled="true"
        :paginationEnabled="true"
        navigationNextLabel="<i class='material-icons'>keyboard_arrow_right</i>"
        navigationPrevLabel="<i class='material-icons'>keyboard_arrow_left</i>"
        :perPage="parseInt(slidesPerPage)"
        :loop="loop == 'true' ? true : false"
        :autoplay="autoplay == 'true' ? true : false"
        :autoplayTimeout="timeout ? parseInt(timeout) : 5000"
        :autoplayHoverPause="autoplayHoverPause == 'true' ? true : false"
        :autoplayDirection="sliderDirection ? sliderDirection : 'forward'"
        :class="[
            'ltr',
            (navigationEnabled == 'hide') ? 'navigation-hide' : '',
            (paginationEnabled == 'hide') ? 'pagination-hide' : '',
            addClass
        ]">

        <slot
            v-for="index in parseInt(slidesCount)"
            :name="`slide-${parseInt(index) - 1}`">
        </slot>
    </carousel>
</template>

<script type="text/javascript">
    export default {
        props: [
            'id',
            'loop',
            'timeout',
            'autoplay',
            'autoplayHoverPause',
            'addClass',
            'slidesCount',
            'slidesPerPage',
            'sliderDirection',
            'navigationEnabled',
            'paginationEnabled',
        ],

        data: function () {
            return {}
        },

        methods: {
            slideClicked: function () {
                debugger
            }
        }
    }
</script>

<style lang="scss">
@import "../../../sass/_mixins.scss";

@include laptop-sm {
    .VueCarousel{
        .VueCarousel-navigation-button {
                visibility: hidden;
                opacity: 0;
        }

        &:hover{
            .VueCarousel-navigation-button {
                visibility: visible;
                opacity: 1;
                background-color: #ffffff!important;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                color: #fa8ba4!important;
                box-shadow:  0px 2px 15px -6px rgba(128,128,128,0.8);
                &:focus {
                    outline: 0!important;
                }
                &.VueCarousel-navigation-next {
                    right: 25px!important;
                }

                &.VueCarousel-navigation-prev{
                    left: 25px!important;
                }
            }
        }
    }
}

</style>

