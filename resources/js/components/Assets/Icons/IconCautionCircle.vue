<template>
  <icon-base icon-name="caution-circle" :width="width" :height="height" :icon-color="iconColor">
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background:new 0 0 64 64;"
      xml:space="preserve"
    >
      <g id="Layer_1">
        <g>
            <circle 
                class="icon-caution-circle-st0" 
                cx="32" 
                cy="32" 
                r="32"
                :style="[backgroundColor ? {} : {'fill': 'none'}]"
            />
        </g>
        <g class="icon-caution-circle-st1">
          <path
            class="icon-caution-circle-st2"
            d="M17,50c-4.4,0-6.2-3.1-4-6.9L28,17c2.2-3.8,5.8-3.8,8,0l15,26.1c2.2,3.8,0.4,6.9-4,6.9H17z"
          />
        </g>
        <g>
          <path
            class="icon-caution-circle-st3"
            d="M17,48c-4.4,0-6.2-3.1-4-6.9L28,15c2.2-3.8,5.8-3.8,8,0l15,26.1c2.2,3.8,0.4,6.9-4,6.9H17z"
          />
        </g>
        <g>
          <path
            class="icon-caution-circle-st4"
            d="M34,32c0,1.1-0.9,2-2,2l0,0c-1.1,0-2-0.9-2-2v-8c0-1.1,0.9-2,2-2l0,0c1.1,0,2,0.9,2,2V32z"
          />
        </g>
        <g>
          <path
            class="icon-caution-circle-st4"
            d="M34,40c0,1.1-0.9,2-2,2l0,0c-1.1,0-2-0.9-2-2l0,0c0-1.1,0.9-2,2-2l0,0C33.1,38,34,38.9,34,40L34,40z"
          />
        </g>
      </g>
      <g id="Layer_2" />
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-caution-circle-st0 {
  fill: #c75c5c;
}
.icon-caution-circle-st1 {
  opacity: 0.2;
}
.icon-caution-circle-st2 {
  fill: #231f20;
}
.icon-caution-circle-st3 {
  fill: #f5cf87;
}
.icon-caution-circle-st4 {
  fill: #4f5d73;
}
</style>

<script>
import IconBase from "./IconBase.vue";

export default {
  props: {
    iconName: {
      type: String,
      default: "box"
    },
    width: {
      type: [Number, String],
      default: 24
    },
    height: {
      type: [Number, String],
      default: 24
    },
    iconColor: {
      type: String,
      default: "currentColor"
    },
    backgroundColor: {
      type: Boolean,
      default: true
    }
  },
  components: { IconBase }
};
</script>
