   <header>
            <link rel="stylesheet" href="{{ URL::asset('css/stylesDashboard.css')}}">
    </header>

    <form id="myForm" runat="server">
        <div class="container">
            <header class="header">
                <!-- Header content -->
            </header>
            <div class="content">
                <div class="left-panel">
                    <ul class="menu">
                        <li><asp:LinkButton ID="studentListLink" runat="server" CssClass="active">Students</asp:LinkButton>
                            <ul class="submenu">
                                <li><asp:LinkButton ID="addStudentLink" runat="server" OnClick="addStudentLink_Click">Add Student</asp:LinkButton></li>
                                <li><asp:LinkButton ID="editStudentLink" runat="server" OnClick="editStudentLink_Click">Edit Student</asp:LinkButton></li>
                            </ul>
                        </li>
                        <li><asp:LinkButton ID="teacherLink" runat="server" CssClass="active">Teachers</asp:LinkButton>
                            <ul class="submenu">
                                <li><asp:LinkButton ID="addTeacherLink" runat="server" OnClick="addTeacherLink_Click">Add Teacher</asp:LinkButton></li>
                                <li><asp:LinkButton ID="editTeacherLink" runat="server" OnClick="editTeacherLink_Click">Edit Teacher</asp:LinkButton></li>
                            </ul>
                        </li>
                        
                        <li><asp:LinkButton ID="studentProgressLink" runat="server" CssClass="active" OnClick="studentProgressLink_Click">Student Progress</asp:LinkButton></li>
                        <li><asp:LinkButton ID="teacherProgressLink" runat="server" CssClass="active" OnClick="teacherProgressLink_Click">Teacher Progress</asp:LinkButton></li>
                    </ul>
                </div>

                <div class="main-content">
                    <asp:Panel ID="addStudentPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Add student</h2>
                            <div class="form-field">
                                <label>Student ID : </label>
                                <asp:TextBox ID="txtStudentID" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Password: </label>
                                <asp:TextBox ID="txtStudentPwd" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Student name: </label>
                                <asp:TextBox ID="txtStudentName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Date of Birth: </label>
                                <asp:TextBox ID="txtStudentDOB" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Gender: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlStudentGender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div><br /><br />
                                <label>Address: </label>
                                <asp:TextBox ID="txtStudentAddress" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Name of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtParentName1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtParentContact1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtParentEmail1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Name of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtParentName2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtParentContact2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtParentEmail2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Branch: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlStudentBranch">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div><br /><br />
                                <label>Teacher assigned: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlStudentTeacher">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <option>Teacher 3</option>
                                    </select>
                                </div>
                                <br />
                                <br />
                                <asp:Button ID="btnSubmit1" runat="server" CssClass="custom-button" Text="Next" />
                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="editStudentPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Edit student</h2>
                            <div class="form-field">

                                <label>Student ID: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditStuID">
                                        <option>Student 1</option>
                                        <option>Student 2</option>
                                        <option>Student 3</option>
                                    </select><br /><br />
                                    <asp:Button ID="btnShowStudent" runat="server" CssClass="custom-button" Text="Show" OnClick="btnShowStudent_Click" CausesValidation="False" UseSubmitBehavior="False" />
                                </div><br /><br />
                                <div id ="editStudentDIV" runat="server" visible="false">
                                <label>Password: </label>
                                <asp:TextBox ID="txtEditStuPwd" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Student name: </label>
                                <asp:TextBox ID="txtEditStuName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Date of Birth: </label>
                                <asp:TextBox ID="txtEditDOB" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Gender: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditStudentGender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div><br /><br />
                                <label>Address: </label>
                                <asp:TextBox ID="txtEditAddress" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Name of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtEditParentName1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtEditParentContact1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email of Father / Guardian 1: </label>
                                <asp:TextBox ID="txtEditParentEmail1" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Name of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtEditParentName2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtEditParentContact2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email of Mother / Guardian 2: </label>
                                <asp:TextBox ID="txtEditParentEmail2" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Branch: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditStudentBranch">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div><br /><br />
                                <label>Teacher assigned: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditStudentTeacher">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <option>Teacher 3</option>
                                    </select>
                                </div>
                                <br />
                                <br />
                                <asp:Button ID="btnSubmit2" runat="server" CssClass="custom-button" Text="Edit" />
                            </div>
                                </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="addTeacherPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Add teacher</h2>
                            <div class="form-field">
                                <label>Teacher ID : </label>
                                <asp:TextBox ID="txtTeacherID" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Password: </label>
                                <asp:TextBox ID="txtTeacherPwd" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Teacher name: </label>
                                <asp:TextBox ID="txtTeacherName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Date of Birth: </label>
                                <asp:TextBox ID="txtTeacherDOB" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Gender: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlTeacherGender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div><br /><br />
                                <label>Address: </label>
                                <asp:TextBox ID="txtTeacherAddress" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number: </label>
                                <asp:TextBox ID="txtTeacherContact" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email: </label>
                                <asp:TextBox ID="txtTeacherEmail" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Next of Kin Name: </label>
                                <asp:TextBox ID="txtNOKName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Next of Kin Contact: </label>
                                <asp:TextBox ID="txtNOKContact" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Join Date: </label>
                                <asp:TextBox ID="txtTeacherJoinDate" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Branch: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlTeacherBranch">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div>
                                <br />
                                <label>Job status: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlJobStatus">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div>
                                <br />
                                <br />
                                <asp:Button ID="btnSubmit3" runat="server" CssClass="custom-button" Text="Submit" />
                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="editTeacherPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Edit teacher</h2>
                            <div class="form-field">

                                <label>Teacher ID: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditTeachID">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <option>Teacher 3</option>
                                    </select><br /><br />
                                    <asp:Button ID="btnShow1" runat="server" CssClass="custom-button" Text="Show" CausesValidation="False" UseSubmitBehavior="False" OnClick="btnShow1_Click" />
                                </div><br /><br />
                                <div id ="editTeacherDIV" runat="server" visible="false">
                                <label>Password: </label>
                                <asp:TextBox ID="txtEditTeacherPwd" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Teacher name: </label>
                                <asp:TextBox ID="txtEditTeacherName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Date of Birth: </label>
                                <asp:TextBox ID="txtEditTeacherDOB" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Gender: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditTeacherGender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div><br /><br />
                                <label>Address: </label>
                                <asp:TextBox ID="txtEditTeacherAddress" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Contact number: </label>
                                <asp:TextBox ID="txtEditTeacherContact" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Email: </label>
                                <asp:TextBox ID="txtEditTeacherEmail" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Next of Kin Name: </label>
                                <asp:TextBox ID="txtEditNOKName" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Next of Kin Contact: </label>
                                <asp:TextBox ID="txtEditNOKContact" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Join Date: </label>
                                <asp:TextBox ID="txtEditJoinDate" runat="server"></asp:TextBox><br />
                                <br />
                                <label>Branch: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditTeacherBranch">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div>
                                <br />
                                <label>Job status: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlEditJobStatus">
                                        <option>Balakong</option>
                                        <option>Seremban</option>
                                        <option>Sungai Buloh</option>
                                    </select>
                                </div>
                                <br />
                                <br />
                                <asp:Button ID="btnSubmit4" runat="server" CssClass="custom-button" Text="Submit" />
                            </div>
                                </div>
                        </div>
                    </asp:Panel>
                    <asp:Panel ID="stuProgressPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Student Progress</h2>
                            <div class="form-field">

                                <label>Student ID: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlStudentID">
                                        <option>Student 1</option>
                                        <option>Student 2</option>
                                        <option>Student 3</option>
                                    </select><br />
                                    <br />
                                </div>
                                <br />
                                <br />
                                <label>Subject: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlSubject">
                                        <option>Bahasa Malaysia</option>
                                        <option>English</option>
                                        <option>Mathematics</option>
                                    </select><br />
                                    <br />
                                </div>
                                <br />
                                <br />
                                <asp:Button ID="btnShow2" runat="server" CssClass="custom-button" Text="Show" CausesValidation="False" UseSubmitBehavior="False" OnClick="btnShow2_Click" />
                                <br />
                                <br />
                                <div id="stuProgressDIV" runat="server" visible="false">
                                    <label>Progress: </label>
                                    <table class="results-table">
                                        <tr>
                                            <th>Lesson</th>
                                            <th>Topic</th>
                                            <th>Teach Date</th>
                                            <th>Learn Status</th>
                                        </tr>
                                        <tr>
                                            <td>Lesson 1</td>
                                            <td>Topic 1</td>
                                            <td>January 1, 2023</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 5</td>
                                            <td>Topic 3</td>
                                            <td>January 2, 2023</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>Lesson 5</td>
                                            <td>Topic 4</td>
                                            <td>January 5, 2023</td>
                                            <td>In Progress</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="teachProgressPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Teacher progress</h2>
                            <div class="form-field">

                                <label>Teacher: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlTeacherName">
                                        <option>Teacher 1</option>
                                        <option>Teacher 2</option>
                                        <option>Teacher 3</option>
                                    </select><br />
                                    <br />
                                </div>
                                <br />
                                <br />
                                <label>Teaching date: </label>
                                <asp:TextBox ID="txtTeachDate" runat="server"></asp:TextBox>
                                <br />
                                <br />
                                <asp:Button ID="btnShow5" runat="server" CssClass="custom-button" Text="Show" CausesValidation="False" UseSubmitBehavior="False" OnClick="btnShow5_Click" />
                                <br />
                                <br />
                                <div id="teachProgressDIV" runat="server" visible="false">
                                    <label>Progress: </label>
                                    <table class="results-table">
                                        <tr>
                                            <th>Student Name</th>
                                            <th>Subject</th>
                                            <th>Topic</th>
                                            <th>Learn Status</th>
                                        </tr>
                                        <tr>
                                            <td>Student 1</td>
                                            <td>BM</td>
                                            <td>Topic 1</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>Student 2</td>
                                            <td>Maths</td>
                                            <td>Topic 5</td>
                                            <td>Completed</td>
                                        </tr>
                                        <tr>
                                            <td>Student 3</td>
                                            <td>English</td>
                                            <td>Topic 3</td>
                                            <td>In Progress</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </asp:Panel>

                </div>
            </div>
        </div>
    </form>