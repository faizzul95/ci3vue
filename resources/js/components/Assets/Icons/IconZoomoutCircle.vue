<template>
  <icon-base
    icon-name="zoomout-circle"
    :width="width"
    :height="height"
    :icon-color="iconColor"
  >
    <svg
      version="1.1"
      id="Layer_1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      viewBox="0 0 64 64"
      style="enable-background: new 0 0 64 64"
      xml:space="preserve"
    >
      <circle
        class="icon-zoomout-circle-st0"
        cx="32"
        cy="32"
        r="32"
        :style="[backgroundColor ? {} : { fill: 'none' }]"
      />
      <path
        class="icon-zoomout-circle-st1"
        d="M49.8,48.4l-5.3-5.3c-0.1-0.1-0.1-0.1-0.2-0.1c2.3-3,3.7-6.8,3.7-10.9c0-9.9-8.1-18-18-18c-9.9,0-18,8.1-18,18
	c0,9.9,8.1,18,18,18c4,0,7.7-1.3,10.8-3.6c0.1,0.1,0.1,0.1,0.2,0.2l5.3,5.3c0.5,0.5,1.1,0.7,1.8,0.7c0.6,0,1.3-0.2,1.8-0.7
	C50.7,50.9,50.7,49.4,49.8,48.4z M30,46c-7.7,0-14-6.3-14-14s6.3-14,14-14s14,6.3,14,14S37.7,46,30,46z"
      />
      <g class="icon-zoomout-circle-st2">
        <path
          class="icon-zoomout-circle-st3"
          d="M36.5,34h-13c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2h13c1.1,0,2,0.9,2,2C38.5,33.1,37.6,34,36.5,34z"
        />
      </g>
      <g>
        <path
          class="icon-zoomout-circle-st4"
          d="M48,50.7c-0.6,0-1.3-0.2-1.8-0.7l-5.3-5.3c-1-1-1-2.6,0-3.5c1-1,2.6-1,3.5,0l5.3,5.3c1,1,1,2.6,0,3.5
		C49.3,50.4,48.6,50.7,48,50.7z"
        />
      </g>
      <g>
        <path
          class="icon-zoomout-circle-st4"
          d="M30,16c7.7,0,14,6.3,14,14s-6.3,14-14,14s-14-6.3-14-14S22.3,16,30,16 M30,12c-9.9,0-18,8.1-18,18
		s8.1,18,18,18c9.9,0,18-8.1,18-18S39.9,12,30,12L30,12z"
        />
      </g>
      <g>
        <path
          class="icon-zoomout-circle-st5"
          d="M36.5,32h-13c-1.1,0-2-0.9-2-2s0.9-2,2-2h13c1.1,0,2,0.9,2,2S37.6,32,36.5,32z"
        />
      </g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-zoomout-circle-st0 {
  fill: #e0995e;
}
.icon-zoomout-circle-st1 {
  opacity: 0.2;
  fill: #231f20;
}
.icon-zoomout-circle-st2 {
  opacity: 0.2;
}
.icon-zoomout-circle-st3 {
  fill: #231f20;
}
.icon-zoomout-circle-st4 {
  fill: #4f5d73;
}
.icon-zoomout-circle-st5 {
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
