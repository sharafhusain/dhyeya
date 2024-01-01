@php($title = 'Menu')
@extends('layouts.dashboard')
@section("style")
    <link rel="stylesheet" href="{{asset('css/autoComplete.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="d-inline">Customize Menus</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " value="course" id="course" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="course">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Course</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="test" value="test" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="test">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Test Series</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="affair" value="affair" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="affair">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Current Affair</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="exam" value="exam" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="exam">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Exam</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="post" value="post" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="post">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Blog</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="pages" value="pages" autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="pages">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Pages</label>
                            </div>
                            <div class="my-2 d-inline">
                                <input type="checkbox" class="btn-check " id="download" value="download"
                                       autocomplete="off">
                                <label class="btn btn-outline-secondary btn-sm mb-1" for="download">
                                    <i class="fa-solid fa-magnifying-glass fs-95"></i> Download</label>
                            </div>
                        </div>

                        <input id="autoComplete" class="w-100 mb-2" type="search" dir="ltr" spellcheck=false
                               autocorrect="off" autocomplete="off" autocapitalize="off" maxlength="2048" tabindex="1">
                        <div class="border p-3 rounded-1 overflow-y-scroll" style="height:300px;">

                            @foreach($menus as $menu)
                                <div class="form-check d-none">
                                    <label class="form-check-label">
                                        <input class="form-check-input menu-list"
                                               data-type="{{$menu->objectable->post_type}}"
                                               data-title="{{$menu->objectable->title}}" data-id="{{$menu->id}}"
                                               type="checkbox"
                                               value="{{$menu->id}}">
                                        {{$menu->objectable->title}}
                                        <span
                                            class="badge text-bg-success">{{$menu->objectable->post_type?$menu->objectable->post_type:"page"}}</span>
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{route("store-menus")}}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="menus" class="form-label">Menus</label>
                                <select class="form-select" id="menu_category"
                                        name="menu_category">
                                    <option value="" selected disabled>Select Menu</option>
                                    <option value="Header Menu" @selected(old('menu_category') == 'Header Menu')>Header
                                        Menu
                                    </option>
                                    <option value="Footer Menu" @selected(old('menu_category') == 'Footer Menu')>Footer
                                        Menu
                                    </option>
                                </select>
                            </div>

                            {{--@if('menu_category')--}}
                            <div class="mb-3">
                                <label for="menus" class="form-label">Menus Group</label>
                                <select class="form-select fs-75" name="location_id" id="menu">
                                    <option value="" selected disabled>None</option>
                                    @foreach($menuLocation as $ml)
                                        <option
                                            @selected(old('location_id') == $ml->id) value="{{$ml->id}}">{{$ml->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--@endif--}}

                            <ul class="menu-container list-group" id="sortable">

                            </ul>
                            <button type="submit" class="btn btn-sm btn-ex-blue mt-3">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(document).ready(function () {
            setMenuItems();
            $("#sortable").sortable();

            // To show checked or unchequed boxes
            $('.menu-list').on('change', function () {

                if ($(this).prop('checked')) {
                    addMenuItem($(this).data("id"), $(this).data("title"), $(this).data("type"));

                } else {
                    const menu_item = $('ul.menu-container li[data-menu-id=' + $(this).val() + ']');
                    if (menu_item.length > 0) {
                        menu_item.remove();
                    }
                }
                console.log("checked", $(this).prop('checked'));
            });


            $('#menu').on('change', function () {
                const url = "{{ route("location-items",":menuid") }}";
                setMenuItems();
            });


            // To show sub menus when select location
            function setMenuItems() {
                const url = "{{ route("location-items",":menuid") }}";
                var locationId = $("#menu").val();
                if (locationId) {
                    $.ajax({
                        "url": url.replace(":menuid", locationId),
                        "success": addMenus
                    });
                }
            }

            function addMenuItem(id, title, type) {
                $('ul.menu-container').append('<li class="list-group-item" data-menu-id="' + id + '">' + title + '' +
                    '<input type="hidden" name="menu_items[]" value ="' + id + '"/>  <span class="badge text-bg-success">' + type + '</span> </li>');
            }

            function addMenus(menus) {
                $('ul.menu-container').html("");
                $('.menu-list').prop("checked", false);
                hideUnChecked()
                menus.forEach(function (value) {
                    $('.menu-list[data-id=' + value["menu_id"] + ']').prop("checked", true);
                    $('.menu-list[data-id=' + value["menu_id"] + ']').parents("div").removeClass("d-none");
                    addMenuItem(value["menu_id"], value["title"], value["type"]);
                })
            }

            function hideUnChecked() {
                document.querySelectorAll(".form-check-label").forEach((lable) => {
                    lable.parentNode.classList.add("d-none");
                })
            }
        });

        $(".btn-check").on("click", alter_search_query)

        let customqueryArray = []
        let sutomequeryString = ""

        function alter_search_query() {
            // console.log($(this)[0].value, $(this)[0].checked)


            // seting values to string
            if ($(this)[0].checked == true) {
                customqueryArray.push($(this)[0].value)
            }
            // deleting values to string
            if ($(this)[0].checked == false) {
                // customqueryArray.includes($(this)[0].value)
                indexOfitem = customqueryArray.indexOf($(this)[0].value)
                // delete customqueryArray[indexOfitem]
                customqueryArray.splice(indexOfitem, 1)
            }
            sutomequeryString = customqueryArray.join("-")
            console.log(sutomequeryString)
        }

        function addNewMenuItem(id, title, type) {
            $('ul.menu-container').append('<li class="list-group-item" data-menu-id="' + id + '">' + title + '' +
                '<input type="hidden" name="new_menu_items[]" value ="' + id + '"/>  <span class="badge text-bg-success">' + type + '</span> </li>');
        }
    </script>
    <script src="{{asset("dist/js/autoComplete.js")}}"></script>


    <script>
        const autoCompleteJS = new autoComplete({
            highlight: true,
            selector: "#autoComplete",
            threshold: 2,
            debounce: 300,
            data: {
                src: async (query) => {
                    try {
                        // Fetch Data from external Source
                        const source = await fetch("{{route("get_posts_ajax_query")}}?keywords=" + query + "&types=" + sutomequeryString);
                        console.log("{{route("get_posts_ajax_query")}}?keywords=" + query + "&types=" + sutomequeryString)
                        // Data should be an array of `Objects` or `Strings`
                        const data = await source.json();
                        return data;
                    } catch (error) {
                        return error;
                    }
                },
                // Data source 'Object' key to be searched
                keys: ["data"]
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS.input.value = "";
                        addNewMenuItem(selection.id, selection.data, selection.type)
                    }
                }
            },
            resultsList: {
                maxResults: 100,
                noResults: true,
            },

            resultItem: {
                element: (item, data) => {
                    // Modify Results Item Style
                    item.style = "display: flex; justify-content: space-between;";
                    // Modify Results Item Content
                    item.innerHTML = `
      <span style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">
        ${data.match}
      </span>
      <span style="display: flex; align-items: center; font-size: 13px; font-weight: 100; text-transform: uppercase; color: rgba(0,0,0,.2);">
        ${data.key}
      </span>`;
                },
                highlight: true
            },
        });


    </script>
@endsection
