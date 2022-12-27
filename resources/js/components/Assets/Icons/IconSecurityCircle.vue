<template>
    <icon-base
        icon-name="security-circle"
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
                        class="icon-security-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-security-circle-st1">
                    <path
                        class="icon-security-circle-st2"
                        d="M32,56c0,0-18-6.8-18-21.5V20.9c0,0,5.8-6.9,18-6.9V56z"
                    />
                </g>
                <g class="icon-security-circle-st1">
                    <path
                        class="icon-security-circle-st2"
                        d="M32,56c0,0,18-6.8,18-21.5V20.9c0,0-5.8-6.9-18-6.9V56z"
                    />
                </g>
                <g>
                    <path
                        class="icon-security-circle-st3"
                        d="M32,54c0,0-18-6.8-18-21.5V18.9c0,0,5.8-6.9,18-6.9V54z"
                    />
                </g>
                <g>
                    <path
                        class="icon-security-circle-st4"
                        d="M32,54c0,0,18-6.8,18-21.5V18.9c0,0-5.8-6.9-18-6.9V54z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-security-circle-st0 {
    fill: #c75c5c;
}
.icon-security-circle-st1 {
    opacity: 0.2;
}
.icon-security-circle-st2 {
    fill: #231f20;
}
.icon-security-circle-st3 {
    fill: #f5cf87;
}
.icon-security-circle-st4 {
    fill: #e0995e;
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
