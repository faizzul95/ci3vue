<template>
    <icon-base
        icon-name="unlocked-circle"
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
                        class="icon-unlocked-circle-st0"
                        cx="32"
                        cy="32"
                        r="32"
                        :style="[backgroundColor ? {} : {'fill': 'none'}]"
                    />
                </g>
                <g class="icon-unlocked-circle-st1">
                    <g>
                        <path
                            class="icon-unlocked-circle-st2"
                            d="M21,35.7c-1.4,0-2.5-1.1-2.5-2.5v-7.3c0-7.4,6.1-13.5,13.5-13.5c4.6,0,8.8,2.3,11.3,6.2
				c0.8,1.2,0.4,2.7-0.7,3.5c-1.2,0.8-2.7,0.4-3.5-0.7c-1.6-2.4-4.2-3.9-7.1-3.9c-4.7,0-8.5,3.8-8.5,8.5v7.3
				C23.5,34.5,22.4,35.7,21,35.7z"
                        />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            class="icon-unlocked-circle-st3"
                            d="M21,33.7c-1.4,0-2.5-1.1-2.5-2.5v-7.3c0-7.4,6.1-13.5,13.5-13.5c4.6,0,8.8,2.3,11.3,6.2
				c0.8,1.2,0.4,2.7-0.7,3.5c-1.2,0.8-2.7,0.4-3.5-0.7c-1.6-2.4-4.2-3.9-7.1-3.9c-4.7,0-8.5,3.8-8.5,8.5v7.3
				C23.5,32.5,22.4,33.7,21,33.7z"
                        />
                    </g>
                </g>
                <g>
                    <g>
                        <path
                            class="icon-unlocked-circle-st3"
                            d="M32,32c-2.2,0-4,1.8-4,4c0,1.5,0.8,2.8,2,3.4V42c0,1.1,0.9,2,2,2s2-0.9,2-2v-2.6c1.2-0.7,2-2,2-3.4
				C36,33.8,34.2,32,32,32z"
                        />
                    </g>
                </g>
                <g class="icon-unlocked-circle-st1">
                    <path
                        class="icon-unlocked-circle-st2"
                        d="M47,27H17c-1.7,0-3,1.3-3,3v19c0,1.7,1.3,3,3,3h30c1.7,0,3-1.3,3-3V30C50,28.3,48.7,27,47,27z M34,41.4V44
			c0,1.1-0.9,2-2,2s-2-0.9-2-2v-2.6c-1.2-0.7-2-2-2-3.4c0-2.2,1.8-4,4-4s4,1.8,4,4C36,39.5,35.2,40.8,34,41.4z"
                    />
                </g>
                <g>
                    <path
                        class="icon-unlocked-circle-st4"
                        d="M47,25H17c-1.7,0-3,1.3-3,3v19c0,1.7,1.3,3,3,3h30c1.7,0,3-1.3,3-3V28C50,26.3,48.7,25,47,25z M34,39.4V42
			c0,1.1-0.9,2-2,2s-2-0.9-2-2v-2.6c-1.2-0.7-2-2-2-3.4c0-2.2,1.8-4,4-4s4,1.8,4,4C36,37.5,35.2,38.8,34,39.4z"
                    />
                </g>
            </g>
            <g id="Layer_2" />
        </svg>
    </icon-base>
</template>

<style type="text/css">
.icon-unlocked-circle-st0 {
    fill: #77b3d4;
}
.icon-unlocked-circle-st1 {
    opacity: 0.2;
}
.icon-unlocked-circle-st2 {
    fill: #231f20;
}
.icon-unlocked-circle-st3 {
    fill: #4f5d73;
}
.icon-unlocked-circle-st4 {
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
