<template>
    <icon-base
        icon-name="cursor-circle"
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
                class="icon-cursor-circle-st0" 
                cx="32" 
                cy="32" 
                r="32" 
                :style="[backgroundColor ? {} : {'fill': 'none'}]"
            />
            <path
                class="icon-cursor-circle-st1"
                d="M23.8,55.6c1.4,0.6,3,0,3.6-1.3l4.8-10.9l7.7,3.4c0.2,0.1,0.4,0.1,0.6,0.1c0.3,0,0.6-0.1,0.8-0.2
	c0.4-0.3,0.7-0.8,0.7-1.3V14.6c0-0.6-0.4-1.1-0.9-1.4c-0.5-0.2-1.2-0.1-1.6,0.3L16.9,34.3c-0.4,0.3-0.5,0.8-0.5,1.3
	c0.1,0.5,0.4,0.9,0.9,1.1l7.7,3.4l-4.8,10.9c-0.6,1.3,0.1,2.9,1.4,3.5L23.8,55.6"
            />
            <path
                class="icon-cursor-circle-st2"
                d="M41.5,11.2c-0.5-0.2-1.2-0.1-1.6,0.3L17.2,32.3c-0.4,0.3-0.5,0.8-0.5,1.3c0.1,0.5,0.4,0.9,0.9,1.1l22.6,10
	c0.2,0.1,1.8,0.2,1.8-1.4V12.6C42,12,42,11.5,41.5,11.2z"
            />
            <path
                class="icon-cursor-circle-st2"
                d="M28.5,31.1l-8,18c-0.6,1.3,0.1,2.9,1.4,3.5l2.2,1c1.4,0.6,3,0,3.6-1.3l7.8-17.6C33.1,33.6,30.8,32.4,28.5,31.1z
	"
            />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-cursor-circle-st0 {
    fill: #4f5d73;
}
.icon-cursor-circle-st1 {
    opacity: 0.2;
    fill: #231f20;
}
.icon-cursor-circle-st2 {
    fill: #e0e0d1;
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
