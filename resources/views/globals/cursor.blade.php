<div class="mouse-cursor cursor-outer" style="visibility: visible; transform: translate(577px, 274px);"></div>
<div class="mouse-cursor cursor-inner" style="visibility: visible; transform: translate(568px, 697px);"></div>

<style>
    .mouse-cursor {
        position: fixed;
        left: 0;
        top: 0;
        pointer-events: none;
        border-radius: 50%;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        visibility: hidden;
    }
    .cursor-inner {
        margin-left: -3px;
        margin-top: -3px;
        width: 6px;
        height: 6px;
        z-index: 10000001;
        background-color: #000;
        -webkit-transition: width .3s ease-in-out, height .3s ease-in-out, margin .3s ease-in-out, opacity .3s ease-in-out;
        transition: width .3s ease-in-out, height .3s ease-in-out, margin .3s ease-in-out, opacity .3s ease-in-out;
    }
    .cursor-outer {
        margin-left: -15px;
        margin-top: -15px;
        width: 30px;
        height: 30px;
        border: 2px solid #000;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        z-index: 10000000;
        -webkit-transition: all .08s ease-out;
        transition: all .08s ease-out;
    }
    .cursor-inner {
        background-color: var(--blue);
    }
    .cursor-outer {
        border-color: var(--blue);
    }
    .mouse-cursor.cursor-hover {
        display: none;
    }
    @media (max-width: 1040px) {
        .mouse-cursor {
            display: none;
        }
    }
</style>
