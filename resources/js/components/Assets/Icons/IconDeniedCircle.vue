<template>
    <icon-base
        icon-name="denied-circle"
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
                        class="icon-denied-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-denied-circle-st1">
                    <path
                        class="icon-denied-circle-st2"
                        d="M32,12c-12.2,0-22,9.8-22,22s9.8,22,22,22s22-9.8,22-22S44.2,12,32,12z M48,34c0,3.3-1,6.4-2.8,9L23,20.8
			c2.6-1.7,5.7-2.8,9-2.8C40.8,18,48,25.2,48,34z M16,34c0-3.3,1-6.4,2.8-9L41,47.2C38.4,49,35.3,50,32,50C23.2,50,16,42.8,16,34z"
                    />
                </g>
                <g>
                    <path
                        class="icon-denied-circle-st3"
                        d="M32,16c8.8,0,16,7.2,16,16s-7.2,16-16,16s-16-7.2-16-16S23.2,16,32,16 M32,10c-12.2,0-22,9.8-22,22
			s9.8,22,22,22s22-9.8,22-22S44.2,10,32,10L32,10z"
                    />
                </g>
                <g>
                    <rect
                        x="12.2"
                        y="29"
                        transform="matrix(0.7071 0.7071 -0.7071 0.7071 32 -13.2548)"
                        class="icon-denied-circle-st3"
                        width="39.6"
                        height="6"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-denied-circle-st0 {
    fill: #e0e0d1;
}
.icon-denied-circle-st1 {
    opacity: 0.2;
}
.icon-denied-circle-st2 {
    fill: #231f20;
}
.icon-denied-circle-st3 {
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
