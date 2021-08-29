<section class="guitarGallery">
    <div style="text-align:center">
        <h2>Guitar Brands we deal with</h2>
        <hr>
    </div>

    <!-- The four columns -->
    <div class="row">
        <div class="column">
            <img src="guitar-gallery/guitar1.jpg" alt="" style="width:100%" onclick="myFunction(this);">
            <p>Fender</p>
        </div>
        <div class="column">
            <img src="guitar-gallery/guitar.jpg" alt="" style="width:100%" onclick="myFunction(this);">
            <p>Epiphone</p>
        </div>
        <div class="column">
            <img src="guitar-gallery/guitar3.jpg" alt="" style="width:100%" onclick="myFunction(this);">
            <p>Gretsch</p>
        </div>
        <div class="column">
            <img src="guitar-gallery/guitar4.jpg" alt="" style="width:100%" onclick="myFunction(this);">
            <p>Gibson</p>
        </div>
    </div>

    <div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg" style="width:100%">
        <div id="imgtext"></div>
    </div>
</section>