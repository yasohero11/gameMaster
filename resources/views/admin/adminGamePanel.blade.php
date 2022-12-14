@extends('layouts.admin.adminLayout')


@section('links')
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

<script src="https://kit.fontawesome.com/1b6dbc5d1f.js"></script>

<style>
  .btn-circle.btn-xl {
    margin-top: 10px;
    width: 35px;
    height: 35px;
    padding: 5px 7px;
    border-radius: 35px;
    font-size: 15px;
    line-height: 1.33;
  }

  .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
  }
  .fixed-top {
    width: 260px;
  }
  .active .fixed-top {
    width: 70px;
  }
  @media (max-width: 977px) {
    .fixed-top {
      display: none;
    }
    .active .fixed-top {
      display: block;
      width: 70px;
    }
  }
</style>
@endsection
@section('content')

<div class="container text-center p-2">
    
    <form id="myForm" >
        <div class="row justify-content-center">

            <input id="name" name="name" placeholder="Game Name" type="text"
                class="col-xl-7 col-lg-7 col-sm-9 col-12 myInput" >
            <input id="price" placeholder="price" name="price" type="number"
                class="col-xl-1 col-lg-3 col-sm-2 col-12 myInput" >
        </div>
        <div class="row justify-content-center">
            <input id="publisher" placeholder="Publisher" name="publisher" type="text"
                class="col-xl-4 col-lg-5 col-sm-6 myInput">
            <input id="company" name="company" placeholder="Company" type="text"
                class="col-xl-4 col-lg-5 col-sm-5 myInput" >
        </div>
        <div class="row justify-content-center">
            <input id="dowenloadLink" name="dowenloadLink" placeholder="Dowenlaod Link" type="text"
                class="col-xl-4 col-lg-5 col-sm-6 myInput" >
            <input id="rateing" name="rateing" placeholder="Rateing" type="text"
                class="col-xl-4 col-lg-5 col-sm-5 myInput" >
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11" style="padding: 0px;">
                <div class="row m-0">
                    <h6>Platforms</h6>
                </div>
                <div id="plaetFormBox" ref="pModal" class="row boxContiner justify-content-center" style="margin: 0px;">

               

                    
                    <button type="button" class="plus" id="addPlatForm">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11 p-0" style="margin: 5px 0px; background:#2A2A2A;">
                <h6>Upload Image</h6>
                <div style="padding: 5px 10px">
                    <input type="file" >
                </div>
                <div class="p-2">
                    <img id="image-preview" class="img-fluid" >
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11" style="padding: 0px;">
                <textarea class="myInput" name="description" id="description" placeholder="Game Description"
                    rows="10"></textarea>
            </div>
        </div>
        <div class="row justify-content-center" style="margin-top: 5px;">
            <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11" style="padding: 0px;">
                <div class="row m-0" style="background: #2A2A2A;">
                    <span "><h6>Tages</h6></span>
                    <span id=" myspan">
                        <i class="fas fa-search searchIcon"></i>
                        <input class="mySearch" id="tagSearch" placeholder="Search ...">
                    </span>
                </div>
                <div id="tagsBox" ref="tModal" class="row boxContiner justify-content-center"
                    style="margin: 0px; padding: 20px 0px;">
                  








                    <button type="button" class="plus plus2">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 5px;">
            <div class="col-xl-8 col-lg-10 col-md-11 col-sm-11" style="padding: 0px;">
                <div class="row m-0" style="background: #2A2A2A;">
                    <span "><h6>Game Types</h6></span>
                    <span id=" myspan">
                        <i class="fas fa-search searchIcon"></i>
                        <input class="mySearch" id="typeSearch" placeholder="Search ...">
                    </span>
                </div>
                <div id="tagsBox" ref="typeModal" class="row boxContiner justify-content-center"
                    style="margin: 0px; padding: 20px 0px;">
                  

                    <button type="button" class="plus plus2" id="addType">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <button type="submit"> submit</button>
    </form>
</div>


<div id="typeModal" class="modal" name="Type">
    <div class="modal-content">
        <div class="head">
            <span class="close">&times;</span>
            <h4 style="color: white;">Type</h4>
        </div>
        <div class="body">
            <Label for="typeName">Type Name</Label>
            <input id="typeName" type="text" name="typeName" placeholder="Enter Game type here ...">

        </div>
        <div class="footer">
            <button class="done">Done</button>
        </div>
    </div>
</div>

<div id="pModal" class="modal" name="Platform">
    <div class="modal-content">
        <div class="head">
            <span class="close">&times;</span>
            <h4 style="color: white;">Platform</h4>
        </div>
        <div class="body">
            <Label for="pName">Platform Name</Label>
            <input id="pName" type="text" name="pName">
            <Label for="pIcon">Fontawesome Icon</Label>
            <input id="pIcon" type="text" name="pIcon">
        </div>
        <div class="footer">
            <button class="done">Done</button>
        </div>
    </div>
</div>

<div id="tModal" class="modal" name="tag">
    <div class="modal-content">
        <div class="head">
            <span class="close">&times;</span>
            <h4 style="color: white;">Tags</h4>
        </div>
        <div class="body">
            <Label for="tName">Tag Name</Label>
            <input id="tName" class="nameField" type="text" name="tName">
        </div>
        <div class="footer">
            <button class="done">Done</button>
        </div>
    </div>
</div>

    
@endsection
    
    
    


@section('scripts')

<script>

    const boxContiners = document.querySelectorAll(".boxContiner");
    var btn = document.getElementById("addPlatForm");
    var pDone = document.getElementById("pDone")
    var pName = document.getElementById("pName")
    var pIcon = document.getElementById("pIcon")
    var tName = document.getElementById("tName")
    var typeName = document.getElementById("typeName")
    var tIcon = document.getElementById("tIcon")
    var allPlus = document.querySelectorAll(".plus")
    var filePicker = document.querySelector("#inpFile")
    var imagePreview = document.querySelector("#image-preview")
    var form = document.querySelector("#myForm")
    var currentModal = null
    var currentEditableElement = null
    var uploadedImage = null
    var modals = []

    const asyncRequest = async (url = "", requestType, data, cb) => {
        let res = await fetch(url, {
            method: requestType,
            credentials: 'same-origin',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        try {
            let response = await res.json()
            cb(response)
        }
        catch (error) {
            console.log(error)
        }
    }

    const addGame = async (data, cb) => {
        let res = await fetch("/games", {
            method: "POST",
            mode: 'cors',
            credentials: 'same-origin',
            body: data,
        })
        try {
            let response = await res.json()
            cb(response)
        }
        catch (error) {
            console.log(error)
        }
    }
    const updateGame = async (data, cb) => {
        let res = await fetch("/games/ game._id  ", {
            method: "PUT",
            mode: 'cors',
            credentials: 'same-origin',
            body: data,
        })
        try {
            let response = await res.json()
            cb(response)
        }
        catch (error) {
            console.log(error)
        }
    }



    function getSeletedItrmArray(items) {
        let array = []
        for (item of items) {
            array.push(item.id)
        }
        return array
    }


    function getSelectedItems() {
        let selectedPlatform = document.querySelectorAll(".platform.selected")
        let selectedTags = document.querySelectorAll(".tag.selected")
        let selectedTypes = document.querySelectorAll(".type.selected")
        let obj = {
            tags: getSeletedItrmArray(selectedTags),
            types: getSeletedItrmArray(selectedTypes),
            platforms: getSeletedItrmArray(selectedPlatform),
        }

        return obj
    }

    function setModal(modal, callbackFun) {
        let span = modal.querySelector("span")
        span.addEventListener("click", () => {
            modal.querySelector("h4").innerHTML = modal.getAttribute("name")
            modal.style.display = "none"
            currentEditableElement = null
        })
        modal.querySelector("button").addEventListener("click", () => callbackFun())
    }

    function setModelTitle(modal, text) {
        let h4 = modal.querySelector("h4")
        h4.innerHTML = text + " " + h4.innerHTML
        currentModal = modal
        modal.style.display = "block";
    }

    function editRoundButton(newName, textField) {
        currentEditableElement.name = newName
        currentEditableElement.lastElementChild.innerHTML = newName
        textField.value = ""
        currentEditableElement = null
    }
  
    
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        let selectedItems = getSelectedItems()
        let data = new FormData(this)
        
        if(selectedItems.platforms.length != 0) {
            data.append("platforms", selectedItems.platforms)
        }
        if(selectedItems.tags.length != 0){
            data.append("tags", selectedItems.tags)
        }

        if(selectedItems.types.length != 0){
            data.append("types", selectedItems.types)
        }
        
            
       
        if(filePicker.getAttribute("old_image")){
            data.append("old_image", filePicker.getAttribute("old_image"))
        }
        

        if(e.currentTarget.getAttribute("my-atr")){
            console.log("enn")
            updateGame(data, function (res) {            
            if(res.success){            
                showAlert(`A Game with name <strong>${data.get("name")}</strong> is been updated` , "alert-success")            
            }
            else{
                let str = ""
                console.log(res.msg)
                if(res.msg == "11000"){
                    str = "There is a game with this name is already exist"
                }else{
                    for (var key of Object.keys(res.msg))
                        str = str + `<li>${res.msg[key].message} </li>`                    
                }
              
                showAlert(`<strong> Error:</string> <ul>${str}</ul>` , "alert-danger")
            }
                
        })
        }
        else{
            addGame( data ,function (res) {
            
            if(res.success)                
                showAlert(`A Game with name <strong>${data.get("name")}</strong> is been added` , "alert-success")
            else{
                let str = ""
                console.log(res.msg)
                if(res.msg == "11000"){
                    str = "There is a game with this name is already exist"
                }else{
                    for (var key of Object.keys(res.msg))
                        str = str + `<li>${res.msg[key].message} </li>`                    
                }
              
                showAlert(`<strong> Error:</string> <ul>${str}</ul>` , "alert-danger")
            }
        })
        }
        
       

        
       
        
    })
    


    filePicker.addEventListener("change", function () {
        let file = this.files[0]
        this.setAttribute("old_image" , this.getAttribute("srcImg"))
        console.log(this)
        if (file) {
            let reader = new FileReader()
            reader.addEventListener("load", function () {
                imagePreview.setAttribute("src", this.result)
            })
            reader.readAsDataURL(file)
        }
    })

    for (box of boxContiners) {
        let modal = document.querySelector(`#${box.getAttribute("ref")}`)
        modals.push(modal)
        box.addEventListener('click', (event) => {
            let target = event.target

            if (target.tagName == "I")
                target = target.parentElement

            if (target.classList.contains("customButton")) {

                currentEditableElement = target.parentElement.parentElement
                console.log("enmnm")
                console.log(currentEditableElement)
                if (target.classList.contains("Edit")) {
                    setModelTitle(modal, target.classList[1])
                    if (currentEditableElement.classList.contains("platform")) {
                        pName.value = currentEditableElement.name
                        pIcon.value = `<i class= "${currentEditableElement.lastElementChild.className}"></i> `
                    } else {
                        currentModal.querySelector("input").value = currentEditableElement.name
                    }
                } else {


                    if (confirm("Are you sure you want to delete thos elemet?")) {
                        console.log(`${currentEditableElement.getAttribute("collectionType")}/${currentEditableElement.id}`)
                        asyncRequest(`/${currentEditableElement.getAttribute("collectionType")}/${currentEditableElement.id}`, "DELETE", {},
                            function (res) {

                                if (res.success) {
                                    currentEditableElement.remove()
                                    currentEditableElement = null
                                }

                            })
                    } else
                        currentEditableElement = null




                }

            }
            else if (target.classList.contains("box") || target.classList.contains("tag") || target.classList.contains("type")) {
                if (!target.classList.contains("selected"))
                    target.classList.add("selected")
                else
                    target.classList.remove("selected")
            } else if (target.classList.contains("plus"))
                setModelTitle(modal, "Add")



        })
    }
    

    setModal(modals[0], () => {

        if (pName.value != "" && pIcon.value != "") {
            if (currentEditableElement == null) {
                asyncRequest("/platforms", "POST", { name: pName.value, icon: pIcon.value }, function (res) {
                    
                    if (res.success == true) {
                        allPlus[0].insertAdjacentHTML("beforebegin",
                            `<button type="button" class="toggle-btn platform box" collectionType="platforms"
                            name="${res.platform.name}" id="${res.platform._id}">
                            <span class="helpButtons">
                                <span class="customButton Remove"><i class="fas fa-times"></i></span>
                                <span class="customButton Edit"><i class="fas fa-edit"></i></span>
                            </span>
                            ${res.platform.icon}
                        </button>`)
                        modals[0].style.display = "none";
                        pName.value = ""
                        pIcon.value = ""
                    } else {
                        console.log(res.msg)
                    }
                })
            } else {
                console.log(currentEditableElement.id)
                asyncRequest(`/platforms/${currentEditableElement.id}`, "PUT", { name: pName.value, icon: pIcon.value }, function (res) {
                    if (res.success == true) {
                        //editRoundButton(res.tag.name, tName)
                        currentEditableElement.name = res.platform.name
                        currentEditableElement.lastElementChild.remove()
                        currentEditableElement.insertAdjacentHTML("beforeend", res.platform.icon)
                        pName.value = ""
                        pIcon.value = ""
                    }
                    else
                        console.log(res.msg)
                })
            }
        }
    })

    setModal(modals[1], () => {
        if (tName.value != "") {
            if (currentEditableElement == null) {
                asyncRequest("/tags", "POST", { name: tName.value }, function (res) {

                    if (res.success == true) {
                        console.log(res.tag)
                        allPlus[1].insertAdjacentHTML("beforebegin",
                            `<button type="button" class="toggle-btn round-buttons tag" collectionType="tags" id = "${res.tag._id}" name="${res.tag.name}">
                                    <span class="helpButtons">
                                        <span class="customButton Remove"><i class="fas fa-times"></i></span>
                                        <span class="customButton Edit"><i class="fas fa-edit"></i></span>
                                    </span>
                                    <i> ${res.tag.name} </i>
                                </button>`)
                        modals[1].style.display = "none";
                        tName.value = ""
                    }
                    else {
                        console.log(res.msg)
                    }
                })

            } else {
                asyncRequest(`/tags/${currentEditableElement.id}`, "PUT", { name: tName.value }, function (res) {
                    if (res.success == true)
                        editRoundButton(res.tag.name, tName)
                    else
                        console.log(res.msg)

                })
            }
        }
    })


    setModal(modals[2], () => {
        if (typeName.value != "") {
            if (currentEditableElement == null) {
                asyncRequest("/types", "POST", { name: typeName.value }, function (res) {
                    if (res.success == true) {
                        allPlus[2].insertAdjacentHTML("beforebegin",
                            `<button type="button" class="toggle-btn round-buttons tag" collectionType="types" id = "${res.type._id}" name="${res.type.name}">
                                    <span class="helpButtons">
                                        <span class="customButton Remove"><i class="fas fa-times"></i></span>
                                        <span class="customButton Edit"><i class="fas fa-edit"></i></span>
                                    </span>
                                    <i> ${res.type.name} </i>
                                </button>`)
                        modals[2].style.display = "none";
                        typeName.value = ""
                    }
                    else {
                        console.log(res.msg)
                    }
                })
            } else {
                asyncRequest(`/types/${currentEditableElement.id}`, "PUT", { name: typeName.value }, function (res) {
                    if (res.success == true)
                        editRoundButton(res.type.name, typeName)
                    else
                        console.log(res.msg)

                })
            }
        }
    })


    


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        let target = event.target

        if (target == currentModal && currentModal != null) {
            currentModal.querySelector("h4").innerHTML = currentModal.getAttribute("name")
            target.style.display = "none";
            currentModal = null
            currentEditableElement = null
        }


    }  
    /*
    $(document).ready(function () {
        $("#myForm").on("submit", function (e) {
            e.preventDefault();
            let selectedItems = getSelectedItems()
            let data = new FormData(this)
            data.append("platforms", selectedItems.platforms)
            data.append("tags", selectedItems.tags)
            data.append("types", selectedItems.types)
            addGame(data, function (res) {
                console.log(res)
            })
            
        })
        
    })
    */
</script>


    
@endsection

