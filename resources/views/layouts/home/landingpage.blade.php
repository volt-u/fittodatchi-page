@extends('layouts.web')
@section('content')
<style scoped>
.container {
}
.sec-1 {
    /* background-color: green; */
}
.sec-1-lbl-bg {
    /* background: url("/assets/images/section-1/section-1-bg.svg") no-repeat;
    background-position: center;
    background-size: 100% 500px;now this is known for the safari */
    /* height: 500px; */
    width: 100%;
    margin: auto
}

.header {

}
.subheader1 {

}
.subheader2 {

}
.subheader3 {

}

.sec-4 {
    height: 200px;
}
/* Desktop */
@media only screen and (max-device-width: 480px) { 

}
/* Tablet */
/* Mobile */

</style>
<div class="container">
        <h2>Content page</h2>
        <div class="sec-1">
            <h3>Section 1</h3>
        </div>
        <div class="sec-2">
            <h3>Section 2</h3>
        </div>
        <div class="sec-3">
            <h3>Section 3</h3>
        </div>
        <div class="sec-4 flex">
            <h3>Section 4</h3>
        </div>
        <div class="sec-5 flex">
            <h3>Section 5</h3>
        </div>
        <div class="sec-6 flex">
            <h3>Section 6</h3>
        </div>
    </div>
</div>
@endsection