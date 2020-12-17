<section class="m-body">
<section class="contact request mt-4 bg-secondary shadow p-1 mb-4 flex-around align-items-center" id="contact">
    <section class="contact-text" style="width: 40%;">
        <h2 class="title uppercase">Lets Work something out!</h2>
        <p class="title-sm">Please fill out the form to send in your qoute request. After Submission, I will get in touch with you via your preferred mode of contact </p>
    </section>

    <section class="contact-form bg-white p-1 rounded">
        <form action="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Type in Your name">
            </div>

            <div class="form-group">
                <label for="email">Business Email</label>
                <input type="email" name="email" id="email" placeholder=" Type in Your email">
            </div>

            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" name="company-name" id="company-name" placeholder="Type in Your company-name">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Type in Your phone">
            </div>

            <div class="form-group">
                <label for="mode">Preffered Mode Of Contact</label>
                <select name="mode" id="mode">
                    <option value="">Preferred Mode Of Contact</option>
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Project Description</label>
                <textarea name="message" id="message" placeholder="I want to build an e-commerce website with laravel..."></textarea>
            </div>

            <div>
                <button class="btn-forward">Submit</button>
            </div>
        </form>
    </section>
</section>
</section>