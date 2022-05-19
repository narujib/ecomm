<!-- FOOTER -->
<footer class="footer">
    <div class="container p-4">
        <div class="row">
            <div class="col-md foot-bottom-text text-center">
                <span>Copyright &copy; <?= date('Y');  ?> Developed with</span>
                <i class="fas fa-heart" style="color: red;"> </i>
                <span>by</span>
                <strong> ICT SMK Negeri Jawa Tengah</strong>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT -->
<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!-- owl js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<!-- custom js -->
<script src="<?= base_url('assets/'); ?>js/homescripts.js"></script>
<!-- load more -->
<script src="<?= base_url('assets/'); ?>js/custom.js"></script>

<!-- js img gallery -->
<script>
    var ImgGallery = document.getElementById("ImgGallery");
    var SmallImgGallery = document.getElementsByClassName("small-img-gallery");

    SmallImgGallery[0].onclick = function() {
        ImgGallery.src = SmallImgGallery[0].src;
    }
    SmallImgGallery[1].onclick = function() {
        ImgGallery.src = SmallImgGallery[1].src;
    }
    SmallImgGallery[2].onclick = function() {
        ImgGallery.src = SmallImgGallery[2].src;
    }
    SmallImgGallery[3].onclick = function() {
        ImgGallery.src = SmallImgGallery[3].src;
    }
    SmallImgGallery[4].onclick = function() {
        ImgGallery.src = SmallImgGallery[4].src;
    }
</script>

</body>

</html>