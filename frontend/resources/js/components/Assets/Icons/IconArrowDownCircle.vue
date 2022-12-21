<template>
  <icon-base
    icon-name="arrow-down-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background: new 0 0 64 64"
      xml:space="preserve"
    >
      <g id="Layer_1">
        <g>
          <circle
            class="icon-arrow-down-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-arrow-down-circle-st1">
          <path
            class="icon-arrow-down-circle-st2"
            d="M47.8,30H40V18c0-2.2-1.8-4-4-4h-8c-2.2,0-4,1.8-4,4v12h-7.8c-2.7,0-3.5,1.9-1.7,4.1l14.3,18.1
			c1.8,2.3,4.7,2.3,6.5,0l14.3-18.1C51.3,31.9,50.6,30,47.8,30z"
          />
        </g>
        <g>
          <path
            class="icon-arrow-down-circle-st3"
            d="M24,16c0-2.2,1.8-4,4-4h8c2.2,0,4,1.8,4,4v24c0,2.2-1.8,4-4,4h-8c-2.2,0-4-1.8-4-4V16z"
          />
        </g>
        <g>
          <path
            class="icon-arrow-down-circle-st3"
            d="M47.8,28c2.7,0,3.5,1.9,1.7,4.1L35.3,50.3c-1.8,2.3-4.7,2.3-6.5,0L14.5,32.1c-1.8-2.3-1-4.1,1.7-4.1H47.8z"
          />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-arrow-down-circle-st0 {
  fill: #76c2af;
}
.icon-arrow-down-circle-st1 {
  opacity: 0.2;
}
.icon-arrow-down-circle-st2 {
  fill: #231f20;
}
.icon-arrow-down-circle-st3 {
  fill: #ffffff;
}
</style>

<script>
import IconBase from "./IconBase.vue";

export default {
  props: {
    iconName: {
      type: String,
      default: "box",
    },
    width: {
      type: [Number, String],
      default: 24,
    },
    height: {
      type: [Number, String],
      default: 24,
    },
    iconColor: {
      type: String,
      default: "currentColor",
    },
    backgroundColor: {
      type: Boolean,
      default: true,
    },
  },
  components: { IconBase },
};
</script>
