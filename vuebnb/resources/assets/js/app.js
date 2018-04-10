import Vue from 'vue';
import "core-js/fn/object/assign";
import { populateAmenitiesAndPrices } from './helpers';

let model = JSON.parse(window.vuebnb_listing_model);
model = populateAmenitiesAndPrices(model);

Vue.component('image-carousel', {
    template: `<div class="image-carousel">
                <img v-bind:src="image"/>
                <div class="controls">
                    <carousel-control dir="left" v-on:change-image="changeImage"></carousel-control>
                    <carousel-control dir="right" v-on:change-image="changeImage"></carousel-control>
                </div>
              </div>`,
    props:  ['images'],
    data() {
        return {
            index: 0
        }
    },
    computed: {
        image() {
            return this.images[this.index];
        }
    },
    methods: {
        changeImage(val){
            let newVal = this.index + parseInt(val);
            if(newVal < 0) {
                this.index = this.images.length -1;
            } else if (newVal === this.images.legnth) {
                this.index = 0;
            } else {
                this.index = newVal;
            }
        }
    },
    components: {
        'carousel-control' : {
            template: '<i v-bind:class="classes" v-on:click="clicked"></i>',
            props: [ 'dir' ],
            computed: {
                classes() {
                    return 'carousel-control fa fa-2x fa-chevron-' + this.dir;
                }
            },
            methods: {
                clicked(){
                    this.$emit('change-image', this.dir === 'left'? -1 : 1);
                },
            }
        }
    }
})

var app = new Vue({
    el: "#app",
    data: Object.assign (model, {
        headerImageStyle: {
            'background-image' : `url(${model.images[0]})`
        },
        contracted: true,
        modalOpen: false
        // title: sample.title,
        // address: sample.address,
        // about:  sample.about,
        // amenities:  sample.amenities,
        // prices:  sample.prices,
    }),
    methods: {
        escapeKeylistener: function(event) {
            if(event.keyCode === 27 && app.modalOpen)
            {
                this.modalOpen = false;
            }
        }
    },
    watch: {
        modalOpen: function() {
            var className = 'modal-open';
            return this.modalOpen?
                document.body.classList.add(className) : document.body.classList.remove(className);
        }
    },
    created: function() {
        document.addEventListener('keyup', this.escapeKeylistener);
    },
    destroyed: function() {
        document.removeEventListener('keyup', this.escapeKeylistener);
    }
});
