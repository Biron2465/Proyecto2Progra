<template>
  <div class="container-fluid">
    <section class="section1 text-center">
      <div class="row mb-4">
        <div class="col-md-12 mt-5">
          <h1>Looking for a Microsoft Teams <br>alternative?</h1>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-md-12">
          <h2>Try Flock for a better chat experience & attractive pricing plans</h2>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12 mt-3">
          <button class="btn" @click="startTrial">Get Started for Free</button>
          <div class="col-md-12">
            <img class="img-responsive" src="../assets/MicrosoftTeams/flock-vs-microsoft-banner-2dedfd1a.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="section2 py-5">
      <div class="row mp-2 text-center">
        <div class="col ">
          <h1>Need more reasons?</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Attractive pricing
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Cheaper plans (per user/month)</td>
                        <td>
                          <h5 style="color: #0abe51;">$4.5</h5>
                        </td>
                        <td>
                          <h5>$5-12.5</h5>
                        </td>
                        <td>Business Essentials - $5 <br>
                          Business Premium - $12.50</td>
                      </tr>
                      <tr>
                        <td colspan="4">Cheaper plans (per user/month)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Business Essentials - $5 <br>
                          Business Premium - $12.50</td>
                      </tr>
                      <tr>
                        <td colspan="4">Cheaper plans (per user/month)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Business Essentials - $5 <br>
                          Business Premium - $12.50</td>
                      </tr>
                      <tr>
                        <td colspan="4">Cheaper plans (per user/month)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Business Essentials - $5 <br>
                          Business Premium - $12.50</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                  Powerful and Smart Channels
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Create private channels - Channels only visible to existing <br>channel members
                        </td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Create public channels only discoverable by specific <br>locations, functions,
                          etc.</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">One-way announcement channels (e.g. HR sending <br>announcements to all
                          employees in Boston)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Can send announcements only <br> to specific teams, not to <br>everyone</td>
                      </tr>
                      <tr>
                        <td colspan="4">Auto-join channels - add users from a specific location/ <br>function to
                          channels automatically (e.g. designers in NY office) </td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Mute a channel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Add/ remove users to a channel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Users can only be removed from <br>a team</td>
                      </tr>
                      <tr>
                        <td colspan="4">User can leave a channel without leaving the team</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Restrict users from leaving an important channel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Set a channel avatar</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                  Built-in Productivity tools
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2" style="color: #0abe51;">Shared To-Dos</th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Built-in To-dos app</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> MS Teams requires integration <br>with "Planner"</td>
                      </tr>
                      <tr>
                        <td colspan="4">Create, browse, edit and assign tasks via the sidebar</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> MS Teams opens a separate tab</td>
                      </tr>
                      <tr>
                        <td colspan="4">Notifications when tasks are added, edited, or deleted</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Bot sends reminder on due date</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>No in-app reminder</td>
                      </tr>
                      <tr>
                        <td colspan="4">Export to CSV</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="7" style="color: #0abe51;">Reminders</td>
                      </tr>
                      <tr>
                        <td colspan="4">Built-in reminders app</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>MS Teams requires integration <br>with "Planner"</td>
                      </tr>
                      <tr>
                        <td colspan="4">Set reminders for yourself, a user, or an entire channel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>MS Teams only allows user <br>reminders</td>
                      </tr>
                      <tr>
                        <td colspan="4">Set recurring reminders</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Snooze reminders</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="7" style="color: #0abe51;">Opinion Polls</td>
                      </tr>
                      <tr>
                        <td colspan="4">Built-in Polls app</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Teams relies on integration with <br>"Polly"</td>
                      </tr>
                      <tr>
                        <td colspan="4">Forward a poll to other channels to increase audience</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Run image-based polls</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Select multiple options in a poll</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="7" style="color: #0abe51;">Code snippet sharing</td>
                      </tr>
                      <tr>
                        <td colspan="4">Share and download code snippets</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Auto indent and formatting</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="7" style="color: #0abe51;">Mailing lists</td>
                      </tr>
                      <tr>
                        <td colspan="4">Easy to remember mail ID</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Add users from outside the organization to the list</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Subscribe and unsubscribe from lists</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                  Well Designed Chat Experience
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Easy access to all unread chats (Recent, unread chats bubble up to the top)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> Team / channel chats do not <br>bubble up in MS Teams</td>
                      </tr>
                      <tr>
                        <td colspan="4">One view of all conversations (direct chats and channels) </td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>direct chats and channels are in <br>separate tabs</td>
                      </tr>
                      <tr>
                        <td colspan="4">Optimal use of screen space: users can see more messages at a glance</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Maximum messages/scroll: Flock <br>- 25, MS Teams - 5</td>
                      </tr>
                      <tr>
                        <td colspan="4">Pin important messages or files for everyone</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Advanced message search: search by keyword, sender, and conversation</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Last seen status for a user</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td colspan="4">Read receipts: know which users read a specific message</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td colspan="4">Customize display density (Comfortable, Cozy, Compact) according to user
                          preferences</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td colspan="4">Inline message replies</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>Creates a separate thread by <br>default</td>
                      </tr>
                      <tr>
                        <td colspan="4">1-click access to productivity tools (todos, mailing list, polls, <br>etc.)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Dedicated section for muted chats</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                  Enhanced Admin Controls
                </button>
              </h2>
              <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Dedicated Admin Panel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>MS Teams: Admin settings <br>spread across multiple panels</td>
                      </tr>
                      <tr>
                        <td colspan="4">Team signup permissions (Invite only / Public)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>MS Teams: no 'public to all' <br>option</td>
                      </tr>
                      <tr>
                        <td colspan="4">Automatically add domain users to the team</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Add other domain users as full users</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Specify who can share files (All / None / Specific users)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Check team file storage</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Hide users from accessing other users' private info (email, mobile)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="7" style="color: #0abe51;">Custom fields for richer user profiles</td>
                      </tr>
                      <tr>
                        <td colspan="4">Create, edit or delete custom fields (e.g. function, role, <br>location,
                          manager, etc.)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Mandatory custom fields</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Parent-child relationships between custom fields</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                  Better Mobile Experience
                </button>
              </h2>
              <div id="collapse6" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Dedicated tab for apps, with easy app store access</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Invite team members</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Enable DND mode</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Lightweight, storage friendly mobile clients <br>
                          iOS <br>
                          Android</td>
                        <td style="color: #0abe51;"><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt=""
                            class="py-2"><br>38.3
                          MB <br> 22,1 MB</td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"><br>84.6
                          MB <br> 39 MB</td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                  Unlimited Free Guests
                </button>
              </h2>
              <div id="collapse7" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="4" style="color: #0abe51;"> Easily collaborate with vendors and clients
                        </th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Allow guests to add apps</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Upgrade guest to team member</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Set guest account validity reminder</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                  On-demand Audio Conferencing
                </button>
              </h2>
              <div id="collapse8" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">1-click audio conferencing: set up dial-in bridges from within <br>the app</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Automatically share dial-in details with participants</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                  Deep Integration with OneDrive, GDrive, Dropbox, and Box
                </button>
              </h2>
              <div id="collapse9" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Search and Browse drive from within the client</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td>MS Teams has no search option</td>
                      </tr>
                      <tr>
                        <td colspan="4">Create new docs/ sheets/ presentations from within the client <br>(for OneDrive
                          & GDrive)</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Share files and grant read / edit access without leaving the <br>client</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Connect multiple OneDrive or Google Drive accounts</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">View all Drive files shared in a channel</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                  Integration with GitHub and GitLab
                </button>
              </h2>
              <div id="collapse11" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Get personal and team notifications</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td> (MS Teams has this only for <br>GitHub)</td>
                      </tr>
                      <tr>
                        <td colspan="4">Assign, close or merge pull requests from within the client</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Browse entire Github repo from within the client</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                  Integration with Twitter
                </button>
              </h2>
              <div id="collapse12" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Receive your DMs</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Forward/ like/ retweet/ reply from within Flock</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                  Powerful Developer Platform
                </button>
              </h2>
              <div id="collapse13" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/Flock Icon.svg" alt="" class="imgTable"></th>
                        <th scope="col"><img src="../assets/MicrosoftTeams/microsoft-teams-974c6f9f.png" alt=""
                            class="imgTable"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td colspan="4">Add sidebar / modal windows</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Add buttons on the Flock interface</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td colspan="4">Add slash commands</td>
                        <td><img src="../assets/MicrosoftTeams/right-tick-5447a8a0-2.png" alt="" class="py-2"></td>
                        <td><img src="../assets/MicrosoftTeams/wrong-icon-b7177ce1.png" alt="" class="py-2"></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section3 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../assets/MicrosoftTeams/f-v-m-get-work-done-c478e6b3.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-6">
            <h1>Get work done faster with Flock</h1>
            <p>With Flock’s built-in productivity tools, you can assign tasks to your team and track their status, run
              polls for quick feedback, and even set nifty reminders. In Teams, you’ll just have to add external apps.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section4 py-5">
      <div class="row text-center py-4">
        <div class="col">
          <h1>Powerful & Smart Channels</h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 ">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-create-channels-36a4a803.svg" alt="Donae Peyper"
                class="img-fluid mb-5 mt-4">
              <h3><strong>Create private channels <br>for focused discussions</strong></h3>
              <p>
                Need to work on a new project? Simply create a private channel and invite select teammates. Unlike
                Teams, where you can’t create private channels.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-broadcast-4e2be778.svg" alt="Holly Hanson"
                class="img-fluid mb-5 mt-4">
              <h3><strong>Broadcast important <br>updates to everyone</strong></h3>
              <p>
                Want to inform everyone about the new company branding? Just share the news via Flock’s one-way
                announcement channel, instead of sharing the update on multiple channels, one by one.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-add-team-93a421da.svg" alt="Hillan Klein"
                class="img-fluid mb-5 mt-4">
              <h3><strong>Add team members to <br>channels automatically</strong></h3>
              <p>
                Adding people to channels one by one? With Flock’s Smart Channels, you can add everyone from a function
                or a location to a channel in one go. Even better, every new user gets added automatically.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section5 py-5">
      <div class="row text-center py-4">
        <div class="col">
          <h1>A more thoughtful chat experience</h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 ">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-all-chats-2b5c98cb.svg" alt="Donae Peyper"
                class="img-fluid mb-5 mt-4">
              <h3><strong>All your chats <br>
                  in one place</strong></h3>
              <p>
                Switching between 1-1 chats, teams, and channels can leave you confused in Microsoft Teams. Find all
                your messages in one place with Flock.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-chat-scroll-24cc3dbb.svg" alt="Holly Hanson"
                class="img-fluid mb-5 mt-4">
              <h3><strong>More chats<br>
                  per scroll</strong></h3>
              <p>
                With Flock, you can see more messages at a glance, so you don’t have to scroll endlessly. Teams’
                cluttered UI, on the other hand, gives you only 5 messages per scroll.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="customer-feedback d-flex justify-content-center flex-column align-items-center">
              <img src="../assets/MicrosoftTeams/f-v-m-chat-pin-c43b9c37.svg" alt="Hillan Klein"
                class="img-fluid mb-5 mt-4">
              <h3><strong>Pin important stuff <br>
                  for your team</strong></h3>
              <p>
                With Flock, you can pin all types of files and messages, so anyone in that channel can find them instantly. Good luck searching for that document on Microsoft Teams!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section6 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../assets/MicrosoftTeams/f-v-m-get-more-for-less-6205dd0d.png" alt="" class="img-responsive">
          </div>
          <div class="col-md-6">
            <h1>Get more for less!</h1>
            <p>Why settle for the user limits that come with Microsoft Teams' Free plan when you can bring onboard unlimited users on Flock? Need more features? Upgrade to Flock's Pro plan and pay only for what you need - a great team messenger. Unless, of course you want to pay for that entire bundle of Microsoft software you probably won't use!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section7 py-4 text-center">
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

  </div>
</template>

<script>

</script>

<style scoped>
.container-fluid {
  padding-left: 0;
  padding-right: 0;
  margin: 0;
  margin-top: 77px;
  overflow-x: hidden;
}

.section1 {
  margin: 0;
  height: auto;
  background-color: #171729;
  color: white;
}

.section1 .img-responsive {
  max-width: 60%;
  height: auto;
  margin-top: -120px;

}

.section1 .btn {
  color: white;
  background-color: #0abe51;
}

.section1 .col-md-12 {
  padding: 0;
  margin: 0;
}

/* //////////////////////////////////////////////////////// */

.section2 {
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

.section2 .col-md-12 {
  width: 80%;
}

.section2 .imgTable {
  width: 30px;
  height: 30px;
}


/* //////////////////////////////////////////////////////// */

.section3 .img-responsive {
  width: 500px;
  height: 300px;
}

/* //////////////////////////////////////////////////////// */
.section4 {
  background-color: #f9f9f9;
}

.section4 .customer-feedback img {
  justify-content: center;
}

/* //////////////////////////////////////////////////////// */
.section6{
  background-color: #f9f9f9;
}

.section6 .img-responsive {
  width: 500px;
  height: 300px;
}

/* //////////////////////////////////////////////////////// */
.section7 {
  padding: 0;
  margin: 0;
}

.section7 .btn {
  background-color: #0abe51;
  color: #ffff;
}

.section7 p {
  text-align: center;
  margin-left: -190px;
}

.section7 a {
  color: black;
}

/* //////////////////////////////////////////////////////// */
</style>