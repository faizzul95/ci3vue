<template>
    <icon-base
        icon-name="clock-circle"
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
                        class="icon-clock-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-clock-circle-st1">
                    <path
                        class="icon-clock-circle-st2"
                        d="M32,16c9.9,0,18,8.1,18,18s-8.1,18-18,18s-18-8.1-18-18S22.1,16,32,16z M32,12c-12.2,0-22,9.8-22,22
			s9.8,22,22,22s22-9.8,22-22S44.2,12,32,12L32,12z"
                    />
                </g>
                <g>
                    <path
                        class="icon-clock-circle-st3"
                        d="M32,14c9.9,0,18,8.1,18,18s-8.1,18-18,18s-18-8.1-18-18S22.1,14,32,14 M32,10c-12.2,0-22,9.8-22,22
			s9.8,22,22,22s22-9.8,22-22S44.2,10,32,10L32,10z"
                    />
                </g>
                <g class="icon-clock-circle-st1">
                    <g>
                        <path
                            class="icon-clock-circle-st2"
                            d="M40,44c-0.5,0-1-0.2-1.4-0.6L30,34.8V26c0-1.1,0.9-2,2-2s2,0.9,2,2v7.2l7.4,7.4c0.8,0.8,0.8,2,0,2.8
				C41,43.8,40.5,44,40,44z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-clock-circle-st4"
                        d="M40,42c-0.5,0-1-0.2-1.4-0.6L30,32.8V24c0-1.1,0.9-2,2-2s2,0.9,2,2v7.2l7.4,7.4c0.8,0.8,0.8,2,0,2.8
			C41,41.8,40.5,42,40,42z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-clock-circle-st0 {
    fill: #e0e0d1;
}
.icon-clock-circle-st1 {
    opacity: 0.2;
}
.icon-clock-circle-st2 {
    fill: #231f20;
}
.icon-clock-circle-st3 {
    fill: #c75c5c;
}
.icon-clock-circle-st4 {
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
