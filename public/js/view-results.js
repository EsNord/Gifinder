
let numPage = 1;
var widthcol0 = 0
var widthcol1= 1
var widthcol2 = 2
var widthcol3 = 3
var ifmethodeIsRun = false
$(document).ready(function () {
    var str = window.location.href;
    var res = str.split("/");
    $('#search-input').val(res[4])
    getImages()



})

function addImgToPage(images) {
    var index = 0;

    images.forEach((img,i) => {
        $('#col'+index).append(`
        <div id="img`+i+`" class="row image">
                        <div
                                class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                data-ripple-color="light"
                        >
                            <img 
                                    src="`+img.image+`"
                                    class="w-100"
                            />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
        `)
        addHeight(index,$('#img'+i).height())
        index = minWidth();
    })
}

function getImages(){
    ifmethodeIsRun =true
    var color = $('#color-img').val()
    var size = $('#size-img').val()
    var time = $('time-img').val()
    var form = new FormData()
    if (color != '' && color !== undefined)
        form.append('images_color',color)

    if (size != '' && size !== undefined)
        form.append('images_size',size)

    if (time != '' && time !== undefined)
        form.append('time_period',time)


    form.append('images_page',numPage)
    form.append('q',$('#search-input').val())


    axios.post('/api/get-more',form).then(function (res) {
        if(res.data != [] && res.data != null)
            addImgToPage(res.data.image_results)
        numPage++
        ifmethodeIsRun = false
    }).catch(function (e) {
        ifmethodeIsRun = false
        $('#content').html(`
                        <img src="/img/logo-search.gif">
        `)
    })
}

$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
        if (ifmethodeIsRun == false)
        getImages()
    }
});

function addHeight(index,newHigh) {
    if (index == 0)
        widthcol0 = widthcol0 + newHigh

    if (index == 1)
        widthcol1 = widthcol1 + newHigh

    if (index == 2)
        widthcol2 = widthcol2 +newHigh

    if (index == 3)
        widthcol3 = widthcol3 + newHigh
}

function minWidth() {
    if (widthcol0 <= widthcol1 && widthcol0 <= widthcol2 && widthcol0 <= widthcol3)
        return 0
    if (widthcol1 <= widthcol0 && widthcol1 <= widthcol2 && widthcol1 <= widthcol3)
        return 1
    if (widthcol2 <= widthcol1 && widthcol2 <= widthcol0 && widthcol2 <= widthcol3)
        return 2
    if (widthcol3 <= widthcol1 && widthcol3 <= widthcol2 && widthcol3 <= widthcol0)
        return 3
}

$('.tool-search').change(function (e) {
    if ($(this).val() != '' || $(this).val() != null){
        numPage = 1
        $('#content').html(`<div class="row">
                    <div class="col-3 colImgs" id="col0">

                    </div>
                    <div class="col-3 colImgs" id="col1">


                    </div>
                    <div class="col-3 colImgs" id="col2">

                    </div>
                    <div class="col-3 colImgs" id="col3">

                    </div>
                </div>`)

        getImages()
    }
})

$('#search-input').keypress(function (e) {
    if ($(this).val() == '' || $(this).val() == null)
        $('#content').html(`
                        <img src="img/logo-search.gif">

        `)
});