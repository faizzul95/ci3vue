<template>
  <icon-base
    icon-name="pin-circle"
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
            class="icon-pin-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-pin-circle-st1">
          <path
            class="icon-pin-circle-st2"
            d="M39.5,37.2V22.8c2.7-0.9,4.5-2.3,4.5-3.9c0-2.8-5.4-4-12-4s-12,1.2-12,4c0,1.6,1.8,3,4.5,3.9v14.3
			c-2.7,0.9-4.5,2.3-4.5,3.9c0,2.5,4.3,4.5,10,4.9v7.1l2,4l2-4V46c5.7-0.4,10-2.4,10-4.9C44,39.5,42.2,38.1,39.5,37.2z"
          />
        </g>
        <g>
          <ellipse class="icon-pin-circle-st3" cx="32" cy="39.1" rx="12" ry="5" />
        </g>
        <g>
          <path
            class="icon-pin-circle-st3"
            d="M44,16.9c0,2.8-5.4,5-12,5s-12-2.2-12-5s5.4-4,12-4S44,14.2,44,16.9z"
          />
        </g>
        <g>
          <rect x="25" y="20" class="icon-pin-circle-st3" width="14" height="20" />
        </g>
        <g>
          <polygon
            class="icon-pin-circle-st4"
            points="30,51.1 32,55.1 34,51.1 34,41.1 30,41.1 		"
          />
        </g>
        <g>
          <ellipse class="icon-pin-circle-st4" cx="32" cy="41.2" rx="2" ry="1.4" />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-pin-circle-st0 {
  fill: #e0e0d1;
}
.icon-pin-circle-st1 {
  opacity: 0.2;
}
.icon-pin-circle-st2 {
  fill: #231f20;
}
.icon-pin-circle-st3 {
  fill: #c75c5c;
}
.icon-pin-circle-st4 {
  fill: #4f5d73;
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
