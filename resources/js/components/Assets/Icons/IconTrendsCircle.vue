<template>
  <icon-base
    icon-name="trends-circle"
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
            class="icon-trends-circle-st0"
            cx="32"
            cy="32"
            r="32"
            :style="[backgroundColor ? {} : { fill: 'none' }]"
          />
        </g>
        <g>
          <path
            class="icon-trends-circle-st1"
            d="M29.1,44.5c-0.5,0-0.9-0.2-1.2-0.6L17.6,29.3l-7.8,5.2c-0.7,0.5-1.6,0.3-2.1-0.4c-0.5-0.7-0.3-1.6,0.4-2.1
			l9-6c0.7-0.5,1.6-0.3,2.1,0.4L29,40.2l10.7-19.8c0.2-0.4,0.7-0.7,1.2-0.8c0.5,0,1,0.2,1.3,0.6l13,16.9c0.5,0.7,0.4,1.6-0.3,2.1
			c-0.7,0.5-1.6,0.4-2.1-0.3l-11.6-15L30.4,43.7C30.2,44.2,29.7,44.5,29.1,44.5C29.2,44.5,29.2,44.5,29.1,44.5z"
          />
        </g>
        <g>
          <circle class="icon-trends-circle-st2" cx="41" cy="23.1" r="4.4" />
        </g>
        <g class="icon-trends-circle-st3">
          <g>
            <path
              class="icon-trends-circle-st4"
              d="M29.1,46.5c-0.5,0-0.9-0.2-1.2-0.6L17.6,31.3l-7.8,5.2c-0.7,0.5-1.6,0.3-2.1-0.4c-0.5-0.7-0.3-1.6,0.4-2.1
				l9-6c0.7-0.5,1.6-0.3,2.1,0.4L29,42.2l10.7-19.8c0.2-0.4,0.7-0.7,1.2-0.8c0.5,0,1,0.2,1.3,0.6l13,16.9c0.5,0.7,0.4,1.6-0.3,2.1
				c-0.7,0.5-1.6,0.4-2.1-0.3l-11.6-15L30.4,45.7C30.2,46.2,29.7,46.5,29.1,46.5C29.2,46.5,29.2,46.5,29.1,46.5z"
            />
          </g>
        </g>
        <g>
          <path
            class="icon-trends-circle-st1"
            d="M29.1,44.5c-0.5,0-0.9-0.2-1.2-0.6L17.6,29.3l-7.8,5.2c-0.7,0.5-1.6,0.3-2.1-0.4c-0.5-0.7-0.3-1.6,0.4-2.1
			l9-6c0.7-0.5,1.6-0.3,2.1,0.4L29,40.2l10.7-19.8c0.2-0.4,0.7-0.7,1.2-0.8c0.5,0,1,0.2,1.3,0.6l13,16.9c0.5,0.7,0.4,1.6-0.3,2.1
			c-0.7,0.5-1.6,0.4-2.1-0.3l-11.6-15L30.4,43.7C30.2,44.2,29.7,44.5,29.1,44.5C29.2,44.5,29.2,44.5,29.1,44.5z"
          />
        </g>
        <g class="icon-trends-circle-st3">
          <circle class="icon-trends-circle-st4" cx="41" cy="25.1" r="4.4" />
        </g>
        <g>
          <circle class="icon-trends-circle-st5" cx="41" cy="23.1" r="4.4" />
        </g>
      </g>
      <g id="Layer_2"></g>
    </svg>
  </icon-base>
</template>

<style type="text/css">
.icon-trends-circle-st0 {
  fill: #76c2af;
}
.icon-trends-circle-st1 {
  fill: #ffffff;
}
.icon-trends-circle-st2 {
  fill: #c75c5c;
}
.icon-trends-circle-st3 {
  opacity: 0.2;
}
.icon-trends-circle-st4 {
  fill: #231f20;
}
.icon-trends-circle-st5 {
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
