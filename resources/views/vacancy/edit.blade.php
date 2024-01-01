@php($title = 'Edit Vacancies')
@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="card my-4">
            <div class="card-header">
                <h5 class="card-title">Edit New Vacancy</h5>
                <select class="float-end d-inline w-25 form-select bg-primary text-white fw-600" id="job_category"
                        name="job_category">
                    <option value="" selected disabled>Select Company</option>
                    <option value="dhyeya" @selected(old('job_category', $vacancies->job_category) == 'dhyeya')>Dhyeya
                    </option>
                    <option value="dizvik" @selected(old('job_category', $vacancies->job_category) == 'dizvik')>Dizvik
                    </option>
                </select>
            </div>
            <div class="card-body">
                <form action="{{route('edit-vacancies', $vacancies->id)}}" method="post">
                    @csrf
                    <input type="hidden" value="{{ old('job_category', $vacancies->job_category) }}" name="job_category"
                           id="job_category_hidden_input">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="en.title" class="form-label">Job Name <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="en.title" name="en[title]"
                                       value="{{old('en.title', $vacancies->translate('en')->title)}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.location" class="form-label">Job Location <span
                                        class="text-muted">(en)</span></label>
                                <input class="form-control" type="text" id="en.location" name="en[location]"
                                       value="{{old('en.location', $vacancies->translate('en')->location)}}">
                            </div>
                            <div class="mb-3">
                                <label for="en.skill_qualification" id="skill_qualificationen_en" class="form-label">Skills
                                    and qualification <span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.skill_qualification"
                                          name="en[skill_qualification]"
                                          rows="3">{{old('en.skill_qualification', $vacancies->translate('en')->skill_qualification)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="en.role_description" class="form-label" id="role_description_en">Role and
                                    Description <span
                                        class="text-muted">(en)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="en.role_description"
                                          name="en[role_description]"
                                          rows="3">{{old('en.role_description', $vacancies->translate('en')->role_description)}}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="hi.title" class="form-label">Job Name <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hi.title" name="hi[title]"
                                       value="{{old('hi.title', $vacancies->translate('hi')->title)}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.location" class="form-label">Job Location <span
                                        class="text-muted">(hi)</span></label>
                                <input class="form-control" type="text" id="hi.location" name="hi[location]"
                                       value="{{old('hi.location', $vacancies->translate('hi')->location)}}">
                            </div>
                            <div class="mb-3">
                                <label for="hi.skill_qualification" class="form-label" id="skill_qualificationen_hi">Skills
                                    and qualification <span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.skill_qualification"
                                          name="hi[skill_qualification]"
                                          rows="3">{{old('hi.skill_qualification', $vacancies->translate('hi')->skill_qualification)}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="hi.role_description" class="form-label" id="role_description_hi">Role and
                                    Description<span
                                        class="text-muted">(hi)</span></label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="hi.role_description"
                                          name="hi[role_description]"
                                          rows="3">{{old('hi.role_description', $vacancies->translate('hi')->role_description)}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="job_type" class="form-label">Job Type<span
                                        class="text-muted"></span></label>
                                <select class="form-select" id="job_type" name="job_type">
                                    <option value="" selected disabled>Choose Job Type</option>
                                    <option
                                        value="Full Time" @selected(old('job_type', $vacancies->job_type) == 'Full Time')>
                                        Full Time
                                    </option>
                                    <option
                                        value="Part Time" @selected(old('job_type', $vacancies->job_type) == 'Part Time')>
                                        Part Time
                                    </option>
                                </select>
                            </div>
                            {{--</div>
                            <div class="col-md-4">--}}
                            <div class="mb-3">
                                <label for="no_of_openings" class="form-label">No. of Openings</label>
                                <input class="form-control" type="number" id="no_of_openings" name="no_of_openings"
                                       value="{{old('no_of_openings', $vacancies->no_of_openings)}}">
                            </div>
                            {{--</div>
                            <div class="col-md-4">--}}
                            <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <textarea class="form-control" id="salary" name="salary"
                                          placeholder="Based on Qualification, knowledge & Experience">{{ old('salary', $vacancies->salary) }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="how_to_apply" id="how_to_apply" class="form-label">How to Apply</label>
                                <textarea class="form-control mySecondaryEditor" type="text" id="how_to_apply"
                                          name="how_to_apply">{{old('how_to_apply', $vacancies->how_to_apply)}}</textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-sm btn-ex-blue">Update</button>
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
