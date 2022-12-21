<template>
  <icon-base
    icon-name="check-circle"
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
            class="icon-check-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g class="icon-check-circle-st1">
          <g>
            <path
              class="icon-check-circle-st2"
              d="M46,45c0,2.2-1.8,4-4,4H22c-2.2,0-4-1.8-4-4V25c0-2.2,1.8-4,4-4h20c2.2,0,4,1.8,4,4V45z"
            />
          </g>
        </g>
        <g>
          <g>
            <path
              class="icon-check-circle-st3"
              d="M22,45c-1.1,0-2-0.9-2-2V23c0-1.1,0.9-2,2-2h20c1.1,0,2,0.9,2,2v20c0,1.1-0.9,2-2,2H22z"
            />
          </g>
          <g>
            <path
              class="icon-check-circle-st4"
              d="M42,23v20H22V23H42 M42,19H22c-2.2,0-4,1.8-4,4v20c0,2.2,1.8,4,4,4h20c2.2,0,4-1.8,4-4V23
				C46,20.8,44.2,19,42,19L42,19z"
            />
          </g>
        </g>
        <g class="icon-check-circle-st1">
          <g>
            <path
              class="icon-check-circle-st2"
              d="M32.5,41c-0.6,0-1.2-0.3-1.6-0.8l-6.1-8c-0.7-0.9-0.5-2.1,0.4-2.8c0.9-0.7,2.1-0.5,2.8,0.4l4.2,5.5
				c2.3-4.2,7.3-11.8,15.3-16.9c0.9-0.6,2.2-0.3,2.8,0.6c0.6,0.9,0.3,2.2-0.6,2.8c-10.2,6.6-15.2,18-15.3,18.1
				c-0.3,0.7-0.9,1.1-1.6,1.2C32.6,41,32.5,41,32.5,41z"
            />
          </g>
        </g>
        <g>
          <path
            class="icon-check-circle-st5"
            d="M32.5,39c-0.6,0-1.2-0.3-1.6-0.8l-6.1-8c-0.7-0.9-0.5-2.1,0.4-2.8c0.9-0.7,2.1-0.5,2.8,0.4l4.2,5.5
			c2.3-4.2,7.3-11.8,15.3-16.9c0.9-0.6,2.2-0.3,2.8,0.6c0.6,0.9,0.3,2.2-0.6,2.8c-10.2,6.6-15.2,18-15.3,18.1
			c-0.3,0.7-0.9,1.1-1.6,1.2C32.6,39,32.5,39,32.5,39z"
          />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-check-circle-st0 {
  fill: #76c2af;
}
.icon-check-circle-st1 {
  opacity: 0.2;
}
.icon-check-circle-st2 {
  fill: #231f20;
}
.icon-check-circle-st3 {
  fill: #ffffff;
}
.icon-check-circle-st4 {
  fill: #4f5d73;
}
.icon-check-circle-st5 {
  fill: #c75c5c;
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
