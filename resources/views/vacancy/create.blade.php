@php($title = 'Create Vacancies')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header ">
                <h5 class="card-title d-inline">Create New Vacancy</h5>
                <select class="float-end d-inline w-25 form-select bg-primary text-white fw-600" id="job_category"
                        name="job_category">
                    <option value="" selected disabled>Select Company</option>
                    <option value="dhyeya" @selected(old('job_category') == 'dhyeya')>Dhyeya
                    </option>
                    <option value="dizvik" @selected(old('job_category') == 'dizvik')>Dizvik
                    </option>
                </select>
            </div>
            <div class="card-body">
                <form action="{{route('create-vacancies')}}" method="post">
                    @csrf
                    <input type="hidden" value="{{ old('job_category') }}" name="job_category"
                           id="job_category_hidden_input">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Job Name (en)</label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.location" class="form-label">Job Location <small>(Optional) </small>
                                    <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="en.location" name="en[location]"
                                       value="{{old('en.location')}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.skill_qualification" id="skill_qualification-en" class="form-label">Skills
                                    and qualification <span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.skill_qualification"
                                          name="en[skill_qualification]"
                                          rows="3">{{old('en.skill_qualification')}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="en.role_description" id="role_description-en" class="form-label">Role and
                                    Description<span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.role_description"
                                          name="en[role_description]" rows="3">{{old('en.role_description')}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Job Name (hi)</label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title')}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.location" class="form-label">Job Location <small>(Optional) </small><span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hi.location" name="hi[location]"
                                       value="{{old('hi.location')}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.skill_qualification-hi" id="skill_qualification-hi" class="form-label">Skills
                                    and qualification <span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.skill_qualification"
                                          name="hi[skill_qualification]"
                                          rows="3">{{old('hi.skill_qualification')}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hi.role_description" id="role_description-hi" class="form-label">Role and
                                    Description<span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.role_description"
                                          name="hi[role_description]" rows="3">{{old('hi.role_description')}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type <small>(Optional) </small><span
                                        class="text-muted"></span></label>
                                <select class="form-select" id="job_type" name="job_type">
                                    <option value="" selected disabled>Choose Job Type</option>
                                    <option value="Full Time" @selected(old('job_type') == 'Full Time')>Full Time
                                    </option>
                                    <option value="Part Time" @selected(old('job_type') == 'Part Time')>Part Time
                                    </option>
                                </select>
                            </div>
                            {{--                        </div>--}}
                            {{--                        <div class="col-md-4">--}}
                            <div class="mb-3">
                                <label for="no_of_openings" class="form-label">No. of Openings <small
                                        class="text-muted">(Optional)</small></label>
                                <input class="form-control" type="number" id="no_of_openings" name="no_of_openings"
                                       value="{{old('no_of_openings')}}">
                            </div>
                            {{--                        </div>--}}
                            {{--                        <div class="col-md-4">--}}
                            <div class="mb-3">
                                <label for="salary" class="form-label">Salary
                                    <small class="text-muted">(Optional)</small></label>
                                <input class="form-control" type="text" id="salary" name="salary"
                                       value="{{old('salary')}}">
                            </div>
                        </div>
                        {{--                    </div>--}}

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="how_to_apply" id="how_to_apply" class="form-label">How to Apply</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="how_to_apply"
                                          name="how_to_apply">{{old('how_to_apply')}}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Create</button>
                    <a href="{{route('vacancies')}}" class="btn btn-sm btn-warning px-3">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script>
        let company = document.querySelector("#job_category")
        let job_category_hidden_input = document.querySelector("#job_category_hidden_input")

        let skill_qualificationen_en = document.querySelector("#skill_qualification-en")
        let skill_qualificationen_hi = document.querySelector("#skill_qualification-hi")

        let role_description_en = document.querySelector("#role_description-en")
        let role_description_hi = document.querySelector("#role_description-hi")


        company.addEventListener("change", function () {
            job_category_hidden_input.value = company.value
            skill_qualificationen_en.classList.add("text-reflection")
            skill_qualificationen_hi.classList.add("text-reflection")
            role_description_en.classList.add("text-reflection")
            role_description_hi.classList.add("text-reflection")

            if (company.value == "dhyeya") {
                skill_qualificationen_en.innerText = "Skills and qualification (en)"
                skill_qualificationen_hi.innerText = "Skills and qualification (hi)"

                role_description_en.innerText = "Role and Description(en)"
                role_description_hi.innerText = "Role and Description(hi)"
            } else {
                skill_qualificationen_en.innerText = "Responsibilities (en)"
                skill_qualificationen_hi.innerText = "Responsibilities (hi)"

                role_description_en.innerText = "Requirement (en)"
                role_description_hi.innerText = "Requirement (hi)"
            }
            setTimeout(() => {
                skill_qualificationen_en.classList.remove("text-reflection")
                skill_qualificationen_hi.classList.remove("text-reflection")
                role_description_en.classList.remove("text-reflection")
                role_description_hi.classList.remove("text-reflection")

            }, 500)
        })
    </script>
@endsection
