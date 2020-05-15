var inputs = document.getElementsByClassName("input_img_file");
if (inputs != null)
for (var i = 0; i < inputs.length; i++)
    inputs[i].onchange = function () {
        var oFReader = new FileReader();
        var input = this;
        if (this.files != null && this.files.length > 0)
            oFReader.readAsDataURL(this.files[0]);
        else
        {
            var nextSibling = input.nextSibling;
            while (nextSibling) {
                if (nextSibling.classList != null &&
                    nextSibling.classList.contains("input_img"))
                {
                    nextSibling.src = "";
                    break;
                }
                nextSibling = nextSibling.nextSibling;
            }
            return;
        }



        oFReader.onload = function (oFREvent) {
            var nextSibling = input.nextSibling;
            while (nextSibling) {
                if (nextSibling.classList != null &&
                    nextSibling.classList.contains("input_img"))
                {
                    nextSibling.src = oFREvent.target.result;
                    break;
                }
                nextSibling = nextSibling.nextSibling;
            }
        };
    };

var imgs = document.getElementsByClassName("input_img");
if (imgs != null)
for (var j = 0; j < imgs.length; j++) {
    imgs[j].onload = function () {
        if (this.src != null && this.src != "")
            this.style.visibility = "visible";
        else
            this.style.visibility = "hidden";
    };

    if (imgs[j].src != null && imgs[j].src != "")
        imgs[j].style.visibility = "visible";
    else
        imgs[j].style.visibility = "hidden";
}


