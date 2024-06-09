<template>
  <div class="container-fluid">
    <section class="section1 py-5 d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card text-center">
              <div class="card-body">
                <h1 class="card-title"><strong>Admin Controls</strong></h1>
                <h6>Conveniently manage all of your team and user permissions to meet your organization's needs.</h6>
                <div class="row justify-content-center">
                  <div class="col-4">
                    <button class="btn botn">Get Started for free</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <section class="section5">
      <div class="container mb-4 text-center">
        <div class="row mt-5 justify-content-center">
          <div class="col-md-8">
            <div>
              <div class="card-body">
                <h3 class="card-title">Take control of your team with flexible, multilevel user access and permissions
                </h3>
              </div>
            </div>
            <img src="../assets/AdminControls/manage-teams.png" alt="" class="img-fluid my-4">
            <div>
              <div class="card-body">
                <h6 class="card-text">You're in full control with Flock—always. We give you the keys to unlock or limit
                  access for everyone in your organization. Managing your team is simple and straightforward, and the
                  benefits go a long way in making sure
                  you're always in control.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="card narrow-card">
      <ul class="nav nav-pills mb-3 inner" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Managing Your Team</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
            type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Inviting Team Members</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
            type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Inviting Guests</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-channels-tab" data-bs-toggle="pill" data-bs-target="#pills-channels"
            type="button" role="tab" aria-controls="pills-channels" aria-selected="false">Creating Channels</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-custom-fields-tab" data-bs-toggle="pill"
            data-bs-target="#pills-custom-fields" type="button" role="tab" aria-controls="pills-custom-fields"
            aria-selected="false">Creating Custom Fields & User Groups</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages"
            type="button" role="tab" aria-controls="pills-messages" aria-selected="false">Sending Messages</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-files-tab" data-bs-toggle="pill" data-bs-target="#pills-files"
            type="button" role="tab" aria-controls="pills-files" aria-selected="false">Sharing Files</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-domains-approve-tab" data-bs-toggle="pill"
            data-bs-target="#pills-domains-approve" type="button" role="tab" aria-controls="pills-domains-approve"
            aria-selected="false">Approving Domains</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-domains-block-tab" data-bs-toggle="pill"
            data-bs-target="#pills-domains-block" type="button" role="tab" aria-controls="pills-domains-block"
            aria-selected="false">Blocking Domains</button>
        </li>
      </ul>
      <div class="tab-content inner" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <p>As a Team Admin, you're in charge of managing access and permissions for every team member in Flock. We
            make it easy to set and adjust these settings at any time via the Admin Panel or directly from a Channel.
          </p>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <p>Getting your team on board is a breeze. Flock generates a unique invitation link where members can connect
            instantly using their work email address. But you can control who can invite new members as well as
            designate the Channels they get added to.</p>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <p>Invite guests from outside your organization to collaborate on Flock. It's a wonderful way to let external
            stakeholders contribute to discussions. Guests only become part of the teams and Channels you choose, and
            their accounts get deactivated when the job is finished.</p>
        </div>
        <div class="tab-pane fade" id="pills-channels" role="tabpanel" aria-labelledby="pills-channels-tab">
          <p>Flock lets you customize permissions for which team members can create Channels. This means you can
            determine who can start or join private and public conversations, while also restricting users to
            predetermined Channels or chats.</p>
        </div>
        <div class="tab-pane fade" id="pills-custom-fields" role="tabpanel" aria-labelledby="pills-custom-fields-tab">
          <p>Custom fields and user groups help team members quickly identify each other and jump-start conversations.
            Automate team and channel management by creating a collection of user groups and auto-join channels that
            provide easy access to important discussions.</p>
        </div>
        <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
          <p>Control who can send messages in Flock based on predetermined custom fields, user groups, or role
            restrictions. You have the ability to restrict messaging to certain Channels or specific people—you can even
            prevent users from sending messages altogether.</p>
        </div>
        <div class="tab-pane fade" id="pills-files" role="tabpanel" aria-labelledby="pills-files-tab">
          <p>Part of the beauty of Flock is in its file-sharing. However, you can manage file-sharing settings to
            safeguard data and protect your business's confidentiality. Customize your preferences based on the custom
            fields and role permissions for each team member.</p>
        </div>
        <div class="tab-pane fade" id="pills-domains-approve" role="tabpanel"
          aria-labelledby="pills-domains-approve-tab">
          <p>Flock gives you the option to let users join your team without pre-authorization from a Team Admin. You can
            whitelist domains or make your team public so anyone can discover and join you on Flock without having to
            get prior approval.</p>
        </div>
        <div class="tab-pane fade" id="pills-domains-block" role="tabpanel" aria-labelledby="pills-domains-block-tab">
          <p>Make sure nobody from outside your organization gains access to Flock without prior approval from your Team
            Admin. With this feature, you can blacklist specific IP addresses and domains so no one who's unauthorized
            unexpectedly joins your team.</p>
        </div>
      </div>
    </div>
    <br>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <section class="section15 py-4 text-center">
      <h1>Start Your 30-Day Free Trial of Flock</h1>
      <div class="container mb-3 mt-4">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="row">
              <div class="col-8">
                <input type="text" class="form-control" placeholder="Enter your work email" v-model="email" />
              </div>
              <div class="col-4">
                <button class="btn" @click="startTrial">Get Flocking</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p>Get the app for <a href="#">Windows PC, Mac, Linux, Chrome</a></p>
    </section>
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  </div>
</template>

<script>

</script>

<style scoped>
.inner {
  display: flex;
  justify-content: center;
}

.container-fluid {
  padding-left: 0;
  padding-right: 0;
  margin: 0;
  margin-top: 77px;
}

.narrow-card {
  max-width: 1000px;
  margin: 0 auto;
}

.section1 {
  background-color: #171729;
}

.section1 .row {
  margin: 0;
  padding: 0;
}


.section1 .card {
  background-color: #171729;
  border: none;
  margin-top: 50px;
}

.section1 .card-img {
  margin-top: 95px;
}

.section1 .col-md-4 .card-img-top1 {
  margin-top: 38px;
}

.section1 .card-body {
  background-color: #171729;
  color: white;
}

.section1 .card-title {
  font-size: 48px;
}

.section1 .card-body h6 {
  margin-bottom: 40px;
}

.section1 .card-body p {
  text-align: center;
  margin-top: 20px;
}

.section1 .card-body p a {
  color: #0abe51;
}

.section1 .card-body .col-4 {
  background-color: #0abe51;
  border-radius: 10px;
}

.section1 .card-body .col-4 .botn {
  color: white;
  font-size: 14px;
}

/* /////////////////////////////////////////////////////// */
.section15 {
  background-color: #f9f9f9;
  padding: 0;
  margin: 0;
}

.section15 .btn {
  background-color: #0abe51;
  color: #ffff;
}

.section15 p {
  text-align: center;
  margin-left: -190px;
}

.section15 a {
  color: black;
}

</style>