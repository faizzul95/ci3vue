<template>
    <icon-base
        icon-name="heart-circle"
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
                        class="icon-heart-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-heart-circle-st1">
                    <g>
                        <path
                            class="icon-heart-circle-st2"
                            d="M50,31c-0.1-5.5-4.6-10.4-10.1-10.4c-3.2,0-6,1.7-7.9,4.1c-1.9-2.5-4.7-4.1-7.9-4.1c-5.5,0-10,4.9-10.1,10.4
				h0c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.2,0,0.3,0,0.4c0.5,14.1,17.8,19.8,17.8,19.8S49.4,45.7,50,31.6c0-0.2,0-0.3,0-0.4
				C50,31.2,50,31.1,50,31C50,31.1,50,31,50,31L50,31z"
                        />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            class="icon-heart-circle-st3"
                            d="M50,29c-0.1-5.5-4.6-10.4-10.1-10.4c-3.2,0-6,1.7-7.9,4.1c-1.9-2.5-4.7-4.1-7.9-4.1c-5.5,0-10,4.9-10.1,10.4
				h0c0,0,0,0.1,0,0.1c0,0,0,0,0,0.1c0,0.2,0,0.3,0,0.4c0.5,14.1,17.8,19.8,17.8,19.8S49.4,43.7,50,29.6c0-0.2,0-0.3,0-0.4
				C50,29.2,50,29.1,50,29C50,29.1,50,29,50,29L50,29z"
                        />
                    </g>
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-heart-circle-st0 {
    fill: #c75c5c;
}
.icon-heart-circle-st1 {
    opacity: 0.2;
}
.icon-heart-circle-st2 {
    fill: #231f20;
}
.icon-heart-circle-st3 {
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
