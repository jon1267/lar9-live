<div>
    <form>
        {{-- step 1 --}}
        <div class="step-one">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 1/4 - Personal Detail</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select class="form-select">
                                    <option value="" selected>Choose gender</option>
                                    <option value="male" >Male</option>
                                    <option value="female" >Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" class="form-control" placeholder="Enter your age">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" cols="2" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>

        {{-- step 2 --}}
        <div class="step-two">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">E-mail Address</label>
                                <input type="text" class="form-control" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter phone number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Country of residence</label>
                                <select class="form-select" >
                                    <option value="" selected>Select country</option>
                                    <option value="United States">United States</option>
                                    <option value="India">India</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Phillipines">Phillipines</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" class="form-control" placeholder="Enter city">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- STEP 3 --}}
        <div class="step-three">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 3/4 - Frameworks experience</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur explicabo, impedit maxime possimus excepturi veniam ut error sit, molestias aliquam repellat eos porro? Sit ex voluptates nemo veritatis delectus quia?
                    <div class="frameworks d-flex flex-column align-items-left mt-2">
                        <label for="laravel">
                            <input type="checkbox" id="laravel" value="laravel" > Laravel
                        </label>
                        <label for="codeigniter">
                            <input type="checkbox" id="codeigniter" value="codeigniter" > Codeigniter
                        </label>
                        <label for="vuejs">
                            <input type="checkbox" id="vuejs" value="vuejs" > Vue Js
                        </label>
                        <label for="cakePHP">
                            <input type="checkbox" id="cakePHP" value="cakePHP" > CakePHP
                        </label>
                    </div>
                </div>
            </div>
        </div>

        {{-- STEP 4 --}}
        <div class="step-four">
            <div class="card">
                <div class="card-header bg-secondary text-white">STEP 4/4 - Attachments</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus officia inventore id facere at aspernatur ad corrupti asperiores placeat, fugiat tempora soluta optio recusandae eligendi impedit ipsam ullam amet!
                    <div class="form-group mt-1">
                        <label for="cv">Your CV</label>
                        <input type="file" class="form-control" >
                    </div>
                    <div class="form-group mt-2">
                        <label for="terms" class="d-block">
                            <input type="checkbox"  id="terms" > You must agree with our <a href="#">Terms and Conditions</a>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
            <div></div>
            <button type="button" class="btn btn-md btn-secondary"> Back </button>
            <button type="button" class="btn btn-md btn-success"> Next </button>
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
        </div>


    </form>
</div>
