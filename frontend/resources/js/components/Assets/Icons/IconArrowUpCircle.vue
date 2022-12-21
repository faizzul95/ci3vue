<template>
  <icon-base
    icon-name="arrow-up-circle"
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
            class="icon-arrow-up-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-arrow-up-circle-st1">
          <path
            class="icon-arrow-up-circle-st2"
            d="M49.5,33.9L35.3,15.7c-1.8-2.3-4.7-2.3-6.5,0L14.5,33.9c-1.8,2.3-1,4.1,1.7,4.1H24v12c0,2.2,1.8,4,4,4h8
			c2.2,0,4-1.8,4-4V38h7.8C50.6,38,51.3,36.1,49.5,33.9z"
          />
        </g>
        <g>
          <path
            class="icon-arrow-up-circle-st3"
            d="M40,48c0,2.2-1.8,4-4,4h-8c-2.2,0-4-1.8-4-4V24c0-2.2,1.8-4,4-4h8c2.2,0,4,1.8,4,4V48z"
          />
        </g>
        <g>
          <path
            class="icon-arrow-up-circle-st3"
            d="M16.2,36c-2.7,0-3.5-1.9-1.7-4.1l14.3-18.1c1.8-2.3,4.7-2.3,6.5,0l14.3,18.1c1.8,2.3,1,4.1-1.7,4.1H16.2z"
          />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-arrow-up-circle-st0 {
  fill: #77b3d4;
}
.icon-arrow-up-circle-st1 {
  opacity: 0.2;
}
.icon-arrow-up-circle-st2 {
  fill: #231f20;
}
.icon-arrow-up-circle-st3 {
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
