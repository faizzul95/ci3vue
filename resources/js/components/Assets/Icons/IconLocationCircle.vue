<template>
    <icon-base
        icon-name="location-circle"
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
                        class="icon-location-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-location-circle-st1">
                    <g>
                        <path
                            class="icon-location-circle-st2"
                            d="M32,14c-9.4,0-17,7.5-17,16.8C15,45.5,32,56,32,56s17-10.2,17-25.2C49,21.5,41.4,14,32,14z M32,38
				c-4.4,0-8-3.6-8-8s3.6-8,8-8s8,3.6,8,8S36.4,38,32,38z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-location-circle-st3"
                        d="M32,12c-9.4,0-17,7.5-17,16.8C15,43.5,32,54,32,54s17-10.2,17-25.2C49,19.5,41.4,12,32,12z M32,36
			c-4.4,0-8-3.6-8-8s3.6-8,8-8s8,3.6,8,8S36.4,36,32,36z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-location-circle-st0 {
    fill: #76c2af;
}
.icon-location-circle-st1 {
    opacity: 0.2;
}
.icon-location-circle-st2 {
    fill: #231f20;
}
.icon-location-circle-st3 {
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
