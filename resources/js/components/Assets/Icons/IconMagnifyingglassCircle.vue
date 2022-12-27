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
                        class="icon-magnifyingglass-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-magnifyingglass-circle-st1">
                    <g>
                        <path
                            class="icon-magnifyingglass-circle-st2"
                            d="M48,52.5c-0.6,0-1.3-0.2-1.8-0.7l-12-12c-1-1-1-2.6,0-3.5c1-1,2.6-1,3.5,0l12,12c1,1,1,2.6,0,3.5
				C49.3,52.3,48.6,52.5,48,52.5z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-magnifyingglass-circle-st3"
                        d="M48,50.5c-0.6,0-1.3-0.2-1.8-0.7l-12-12c-1-1-1-2.6,0-3.5c1-1,2.6-1,3.5,0l12,12c1,1,1,2.6,0,3.5
			C49.3,50.3,48.6,50.5,48,50.5z"
                    />
                </g>
                <g>
                    <circle
                        class="icon-magnifyingglass-circle-st4"
                        cx="28.4"
                        cy="28.4"
                        r="10.6"
                    />
                </g>
                <g class="icon-magnifyingglass-circle-st1">
                    <g>
                        <path
                            class="icon-magnifyingglass-circle-st2"
                            d="M28.4,19.8c2.7,0,5.4,1,7.5,3.1c4.1,4.1,4.1,10.8,0,14.9c-2.1,2.1-4.8,3.1-7.5,3.1s-5.4-1-7.5-3.1
				c-4.1-4.1-4.1-10.8,0-14.9C23,20.9,25.7,19.8,28.4,19.8z M28.4,15.8c-3.9,0-7.5,1.5-10.3,4.3c-5.7,5.7-5.7,14.9,0,20.6
				c2.8,2.8,6.4,4.3,10.3,4.3s7.5-1.5,10.3-4.3c5.7-5.7,5.7-14.9,0-20.6C35.9,17.3,32.3,15.8,28.4,15.8L28.4,15.8z"
                        />
                    </g>
                </g>
                <g>
                    <path
                        class="icon-magnifyingglass-circle-st5"
                        d="M28.4,17.8c2.7,0,5.4,1,7.5,3.1c4.1,4.1,4.1,10.8,0,14.9c-2.1,2.1-4.8,3.1-7.5,3.1s-5.4-1-7.5-3.1
			c-4.1-4.1-4.1-10.8,0-14.9C23,18.9,25.7,17.8,28.4,17.8 M28.4,13.8c-3.9,0-7.5,1.5-10.3,4.3c-5.7,5.7-5.7,14.9,0,20.6
			c2.8,2.8,6.4,4.3,10.3,4.3s7.5-1.5,10.3-4.3c5.7-5.7,5.7-14.9,0-20.6C35.9,15.3,32.3,13.8,28.4,13.8L28.4,13.8z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-magnifyingglass-circle-st0 {
    fill: #e0995e;
}
.icon-magnifyingglass-circle-st1 {
    opacity: 0.2;
}
.icon-magnifyingglass-circle-st2 {
    fill: #231f20;
}
.icon-magnifyingglass-circle-st3 {
    fill: #4f5d73;
}
.icon-magnifyingglass-circle-st4 {
    fill: #77b3d4;
}
.icon-magnifyingglass-circle-st5 {
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
