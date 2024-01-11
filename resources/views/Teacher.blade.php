<x-app-layout>
<header>
    <link rel="stylesheet" href="{{ URL::asset('css/stylesDashboard.css')}}">
    </header>

    <form id="myForm" runat="server">
        <div class="container">
            <header class="header">
                <!-- Header content -->
            </header>
            <div class="content">
                <!--
                <div class="left-panel">
                    <ul class="menu">
                        <li><asp:LinkButton ID="studentListLink" runat="server" CssClass="active" OnClick="studentListLink_Click">Student List</asp:LinkButton></li>
                        <li><asp:LinkButton ID="studyProgressLink" runat="server" CssClass="active" OnClick="studyProgressLink_Click">Study progress</asp:LinkButton></li>
                        <li><asp:LinkButton ID="examLink" runat="server" CssClass="active" OnClick="examLink_Click">Exam</asp:LinkButton></li>
                        <li><asp:LinkButton ID="attendanceLink" runat="server" CssClass="active" OnClick="attendanceLink_Click">Attendance</asp:LinkButton></li>
                        <li><asp:LinkButton ID="teacherIepLink" runat="server" CssClass="active" OnClick="teacherIepLink_Click">IEP</asp:LinkButton></li>
                        <li><asp:LinkButton ID="tCoheranLink" runat="server" CssClass="active" OnClick="tCoheranLink_Click">Coheran</asp:LinkButton></li>
                    </ul>
                </div>
                -->
                <div class="main-content">
                    <asp:Panel ID="studentListPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">My students</h2>
                            <div class="form-field">
                                <div id="studentTablePlaceholder" runat="server">
                                    </div>
                            </div>
                        </div>
                    </asp:Panel>
                    <asp:Panel ID="stuProgressPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Student Progress</h2>
                            <div class="form-field">
                                <label>
                                    Student:
                                </label>
                                <div class="custom-dropdown">
                                    <asp:DropDownList ID="ddlStudent1" runat="server">
                                    </asp:DropDownList>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <label>
                                    Subject:
                                </label>
                                <div class="custom-dropdown">
                                    <asp:DropDownList ID="ddlSubject" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlSubject_SelectedIndexChanged">
                                        <asp:ListItem Text="Select Subject" Value="0" />
                                        <asp:ListItem Text="Bahasa Malaysia" Value="1" />
                                        <asp:ListItem Text="English" Value="2" />
                                        <asp:ListItem Text="Mathematics" Value="3" />
                                    </asp:DropDownList>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <label>
                                    Lesson:
                                </label>
                                <div class="custom-dropdown">
                                    <asp:DropDownList ID="ddlLesson1" runat="server" AutoPostBack="True" OnSelectedIndexChanged="ddlLesson1_SelectedIndexChanged">
                                    </asp:DropDownList>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <label>
                                    Topic:
                                </label>
                                <div class="custom-dropdown">
                                    <asp:DropDownList ID="ddlTopic1" runat="server">
                                    </asp:DropDownList>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <label>
                                    Learning status:
                                </label>
                                <div class="custom-dropdown">
                                    <asp:DropDownList ID="ddlStatus" runat="server">
                                        <asp:ListItem Text="Select Status"/>
                                        <asp:ListItem Text="Completed"/>
                                        <asp:ListItem Text="Still Learning"/>
                                        <asp:ListItem Text="Stopped"/>
                                    </asp:DropDownList>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="form-field">
                                    <asp:Button ID="btnSubmit" runat="server" CssClass="custom-button" Text="Submit" UseSubmitBehavior="False" OnClick="btnSubmit_Click" />
                                </div>
                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="examPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Exam</h2>
                            <div class="form-field">
                                <label>Exam type: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlExamType" name="week">
                                        <option value="lessonExam">Lesson Exam</option>
                                        <option value="finalExam">Final Exam</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div><br /><br />
                                <label>Subject: </label>
                                <div class="custom-dropdown">
                                    <select id="ddlExamSubject" name="week">
                                        <option value="bm">Bahasa Malaysia</option>
                                        <option value="english">English</option>
                                        <option value="maths">Mathematics</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                                </div><br /><br />

                                <label>Lesson Involve: </label>
                                <label id="selectedOptionsLabel"></label>
                                <div id="checkboxContainer">
                                    <asp:CheckBoxList ID="checkLessonInvolve" runat="server" CssClass="checkbox-list">
                                        <asp:ListItem Text="Option 1" Value="Option 1"></asp:ListItem>
                                        <asp:ListItem Text="Option 2" Value="Option 2"></asp:ListItem>
                                        <asp:ListItem Text="Option 3" Value="Option 3"></asp:ListItem>
                                    </asp:CheckBoxList>
                                </div>

                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="attendancePanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Attendance</h2>
                            <div class="form-field">
                                <label>Date: </label>
                                <asp:TextBox ID="txtDate" runat="server"></asp:TextBox><br /><br />
                                <label>Subject: </label>
                                <asp:TextBox ID="txtSubject" runat="server"></asp:TextBox><br /><br />
                                <label>Lesson: </label>
                                <asp:TextBox ID="txtLesson" runat="server"></asp:TextBox><br /><br />
                                <asp:Button ID="showAttend" runat="server" CssClass="custom-button" Text="Show Attendance" OnClick="showAttend_Click" />

                                <table id="attendanceTable" class="results-table" style="display: none;" runat="server">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Attendance</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            </div>
                        </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <label>Select student: </label>
                            <div class="custom-dropdown">
                                    <select id="ddlStudentIEP">
                                        <option>Student 1</option>
                                        <option>Student 2</option>
                                        <option>Student 3</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <asp:Button ID="btnstartIEP" runat="server" CssClass="custom-button" Text="Next" OnClick="btnstartIEP_Click" />
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel1" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>1. BioDyslexia Multisensory Screening VAKT Coherence Record</h3>
                            <label>Visual (BM): </label>
                            <asp:TextBox ID="txtVisualBM" runat="server"></asp:TextBox><br /><br />
                            <label>Visual (English): </label>
                            <asp:TextBox ID="txtVisualEng" runat="server"></asp:TextBox><br /><br />
                            <label>Visual (Mathematics): </label>
                            <asp:TextBox ID="txtVisualMaths" runat="server"></asp:TextBox><br /><br />
                            <label>Auditory (BM): </label>
                            <asp:TextBox ID="txtAudioBM" runat="server"></asp:TextBox><br /><br />
                            <label>Auditory (English): </label>
                            <asp:TextBox ID="txtAudioEng" runat="server"></asp:TextBox><br /><br />
                            <label>Auditory (Mathematics): </label>
                            <asp:TextBox ID="txtAudioMaths" runat="server"></asp:TextBox><br /><br />
                            <label>Kinesthetic Tactile (BM): </label>
                            <asp:TextBox ID="txtKtBM" runat="server"></asp:TextBox><br /><br />
                            <label>Kinesthetic Tactile (English): </label>
                            <asp:TextBox ID="txtKtEng" runat="server"></asp:TextBox><br /><br />
                            <label>Kinesthetic Tactile (Mathematics): </label>
                            <asp:TextBox ID="txtKtMaths" runat="server"></asp:TextBox><br /><br />
                            <asp:Button ID="btnNext1" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext1_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel2" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>2. Student's areas of strength and areas of need</h3>
                            <label>Strength (BM): </label>
                            <asp:TextBox ID="txtStrengthBM" runat="server"></asp:TextBox><br /><br />
                            <label>Strength (English): </label>
                            <asp:TextBox ID="txtStrengthEng" runat="server"></asp:TextBox><br /><br />
                            <label>Strength (Mathematics): </label>
                            <asp:TextBox ID="txtStrengthMaths" runat="server"></asp:TextBox><br /><br />
                            <label>Need (BM): </label>
                            <asp:TextBox ID="txtNeedBM" runat="server"></asp:TextBox><br /><br />
                            <label>Need (English): </label>
                            <asp:TextBox ID="txtNeedEng" runat="server"></asp:TextBox><br /><br />
                            <label>Need (Mathematics): </label>
                            <asp:TextBox ID="txtNeedMaths" runat="server"></asp:TextBox><br /><br />
                            <label>Abilities: </label>
                            <asp:TextBox ID="txtAbilities" runat="server"></asp:TextBox><br /><br />
                            <label>Abilities require assistance: </label>
                            <asp:TextBox ID="txtAbilitiesHelp" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext2" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext2_Click"/>
                            <asp:Button ID="btnPrevious2" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious2_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel3" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>3. Reading and Writing Test</h3>
                            <h3>English</h3>
                            <h3>Reading</h3>
                            <label>Text given: </label>
                            <asp:Image ID="imgReadGiven" runat="server" />
                            <label>Student read upto: </label>
                            <textarea id="txtReadTill" name="readTill" placeholder="Student read upto" aria-readonly="False" readonly="readonly"></textarea>
                            <label>Read speed: </label>
                            <asp:TextBox ID="txtReadSpeed" runat="server"></asp:TextBox><br /><br />
                            <h3>Writing</h3>
                            <label for="writeGiven">Text given: </label>
                            <asp:Image ID="imgWriteGiven" runat="server" />
                            <label>Student writing: </label>
                            <asp:Image ID="imgStuWriting" runat="server" />
                            <label>Number of Letters Copied in 90 seconds: </label>
                            <asp:TextBox ID="txtScore90s" runat="server"></asp:TextBox><br /><br />
                            <label>Number of Letters Copied in 90 seconds Divided by 1.5 = Letters Per Minutes (LPM) </label>
                            <asp:TextBox ID="txtScoreMin" runat="server"></asp:TextBox><br /><br />
                            <label>Write speed: </label>
                            <asp:TextBox ID="txtWriteSpeed" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext3" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext3_Click"/>
                            <asp:Button ID="btnPrevious3" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious3_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel4" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>3. Reading and Writing Test</h3>
                            <h3>Bahasa Malaysia</h3>
                            <h3>Membaca</h3>
                            <label>Teks diberi: </label>
                            <asp:Image ID="imgTeksDiberi" runat="server" />
                            <label>Teks dibaca: </label>
                            <textarea id="txtDibaca" name="readTill" placeholder="Pelajar membaca sehingga" aria-readonly="False" readonly="readonly"></textarea>
                            <label>Kelajuan membaca: </label>
                            <asp:TextBox ID="txtLajuBaca" runat="server"></asp:TextBox><br /><br />
                            <h3>Menulis</h3>
                            <label>Teks diberi: </label>
                            <asp:Image ID="imgTulisDiberi" runat="server" />
                            <label>Pelajar menulis: </label>
                            <asp:Image ID="imgMenulis" runat="server" />
                            <label>Jumlah perkataan ditulis dalam 90s: </label>
                            <asp:TextBox ID="txtMarkah90s" runat="server"></asp:TextBox><br /><br />
                            <label>Jumlah perkataan ditulis dalam 90s dibahagi 1.5 = Letters Per Minutes (LPM) </label>
                            <asp:TextBox ID="txtMarkahMinit" runat="server"></asp:TextBox><br /><br />
                            <label>Kelajuan menulis: </label>
                            <asp:TextBox ID="txtLajuTulis" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext4" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext4_Click"/>
                            <asp:Button ID="btnPrevious4" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious4_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel5" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>4. Reading and Writing Test Result</h3>
                            <label>Average Reading Speed (Real Age): </label>
                            <div class="custom-dropdown">
                                    <select id="ddlAvgReadSpeed">
                                        <option>6-7 yrs old - 53-111 wpm</option>
                                        <option>7-8 yrs old - 89-149 wpm</option>
                                        <option>8-9 yrs old - 107-162 wpm</option>
                                        <option>9-10 yrs old - 123-180 wpm</option>
                                        <option>10-11 yrs old - 139-194 wpm</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14 yrs old - 150-204 wpm</option>
                                        <option>14-23 yrs old - 200-300 wpm</option>
                                        <option>above 23 yrs old - 220-350 wpm</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Age according to Test Reading Speed : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlAgeReadSpeed">
                                        <option>6-7 yrs old - 53-111 wpm</option>
                                        <option>7-8 yrs old - 89-149 wpm</option>
                                        <option>8-9 yrs old - 107-162 wpm</option>
                                        <option>9-10 yrs old - 123-180 wpm</option>
                                        <option>10-11 yrs old - 139-194 wpm</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14 yrs old - 150-204 wpm</option>
                                        <option>14-23 yrs old - 200-300 wpm</option>
                                        <option>above 23 yrs old - 220-350 wpm</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Gender: </label>
                            <asp:RadioButtonList ID="radioGender" runat="server">
                                <asp:ListItem Text="Male" Value="Male" />
                                <asp:ListItem Text="Female" Value="Female" />
                            </asp:RadioButtonList><br /><br />

                            <label>Handwriting Speed (Letters per minute) Real Age: </label>
                            <div class="custom-dropdown">
                                    <select id="ddlHandwriteSpeed">
                                        <option>Grade 1 - 21</option>
                                        <option>Grade 2 - 36</option>
                                        <option>Grade 3 - 50</option>
                                        <option>Grade 4 - 66</option>
                                        <option>Grade 5 - 75</option>
                                        <option>Grade 6 - 91</option>
                                        <option>Grade 7 - 109</option>
                                        <option>Grade 8 - 118</option>
                                        <option>Grade 9 - 121</option>
                                        <option>Grade 1 - 17</option>
                                        <option>Grade 2 - 32</option>
                                        <option>Grade 3 - 45</option>
                                        <option>Grade 4 - 61</option>
                                        <option>Grade 5 - 71</option>
                                        <option>Grade 6 - 78</option>
                                        <option>Grade 7 - 91</option>
                                        <option>Grade 8 - 112</option>
                                        <option>Grade 9 - 114</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Age according to Test Handwritting Speed : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlAgeWriteSpeed">
                                        <option>6-7 yrs old - 53-111 wpm</option>
                                        <option>7-8 yrs old - 89-149 wpm</option>
                                        <option>8-9 yrs old - 107-162 wpm</option>
                                        <option>9-10 yrs old - 123-180 wpm</option>
                                        <option>10-11 yrs old - 139-194 wpm</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14 yrs old - 150-204 wpm</option>
                                        <option>14-23 yrs old - 200-300 wpm</option>
                                        <option>above 23 yrs old - 220-350 wpm</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            
                            <asp:Button ID="btnNext5" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext5_Click"/>
                            <asp:Button ID="btnPrevious5" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious5_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel6" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>4. Reading and Writing Test Result</h3>
                            <h3>General Handwritting techniques</h3>
                            <label for="posture">Posture: </label>
                            <div class="custom-dropdown">
                                    <select id="ddlPosture">
                                        <option>Improper posture</option>
                                        <option>Require more practice</option>
                                        <option>Good</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label for="pencilGrip">Pencil Grip : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlPencilGrip">
                                        <option>Improper pencil grip</option>
                                        <option>Require more practice</option>
                                        <option>Good</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label for="paperPosition">Paper Position: </label>
                            <div class="custom-dropdown">
                                    <select id="ddlPaperPosition">
                                        <option>Improper paper position</option>
                                        <option>Require more practice</option>
                                        <option>Good</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <h3>General Letter Formation</h3>
                            <label for="legible">Legible : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlLegible">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label for="shapeSize">Correct letter shape and size : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlShapeSize">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label for="textSpace">Even spaces between letters : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlTextSpace">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label for="writtingLine">Sits neatly on writting line : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlWriteLine">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            
                            <asp:Button ID="btnNext6" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext6_Click"/>
                            <asp:Button ID="btnPrevious6" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious6_Click"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel7" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>4. Reading and Writing Test Result</h3>
                            <h3>Lower case letter formation</h3>
                            <label>Above the Line Letters = b, d, f, h, k, l, t : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlAboveLine">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Below the Line Letters = g, j, p, q, y : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlBelowLine">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Curly Letters = a, c, e, m, n, o, s, u : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlCurlyLetter">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Letters with Corners = i, r, v, w, x, z : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlCornerLetter">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <h3>Upper case letter formation</h3>
                            <label>Correct capital letter size : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlCorrectSize">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Vertical Lines Formed Top to Bottom : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlVerticalLetter">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Horizontal Lines Formed Left to Right : </label>
                            <div class="custom-dropdown">
                                    <select id="ddlHorizontalLetter">
                                        <option>Able to write</option>
                                        <option>Unable to write</option>
                                        <option>Able but need practice</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            
                            <asp:Button ID="btnNext7" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext7_Click" />
                            <asp:Button ID="btnPrevious7" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious7_Click" />
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel8" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>5. Summary of Information from Parents and Class Teachers</h3>
                            <h3>Self Management Skills</h3>
                            <label>Home : </label>
                            <asp:TextBox ID="txtSmsHome" runat="server"></asp:TextBox><br /><br />
                            <label>School : </label>
                            <asp:TextBox ID="txtSmsSchool" runat="server"></asp:TextBox><br /><br />
                            <h3>Motivation</h3>
                            <label>Home : </label>
                            <asp:TextBox ID="txtMotivateHome" runat="server"></asp:TextBox><br /><br />
                            <label>School : </label>
                            <asp:TextBox ID="txtMotivateSchool" runat="server"></asp:TextBox><br /><br />
                            <h3>Self-esteem</h3>
                            <label>Home : </label>
                            <asp:TextBox ID="txtSeHome" runat="server"></asp:TextBox><br /><br />
                            <label>School : </label>
                            <asp:TextBox ID="txtSeSchool" runat="server"></asp:TextBox><br /><br />
                            <h3>Language and communication skills</h3>
                            <label>Home : </label>
                            <asp:TextBox ID="txtLcHome" runat="server"></asp:TextBox><br /><br />
                            <label>School : </label>
                            <asp:TextBox ID="txtLcSchool" runat="server"></asp:TextBox><br /><br /><br />
                            <label>Literacy Skills : </label>
                            <asp:TextBox ID="txtLiteracy" runat="server"></asp:TextBox><br /><br />
                            <label>Mathematical Skills : </label>
                            <asp:TextBox ID="txtMathematical" runat="server"></asp:TextBox><br /><br />
                            <label>Fine Motor Skills : </label>
                            <asp:TextBox ID="txtFineMotor" runat="server"></asp:TextBox><br /><br />
                            <label>Gross Motor Skills : </label>
                            <asp:TextBox ID="txtGrossMotor" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext8" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext8_Click"/>
                            <asp:Button ID="btnPrevious8" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious8_Click" style="height: 29px"/>
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel9" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>6. Transition</h3>
                            <h3>Bahasa Malaysia </h3>
                            <label>Status</label>
                            <div class="custom-dropdown">
                                    <select id="ddlTransBM">
                                        <option>Level up</option>
                                        <option>Remains</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Level</label>
                            <div class="custom-dropdown">
                                    <select id="ddlLevelBM">
                                        <option>Early Beginner</option>
                                        <option>Beginner</option>
                                        <option>Pre-Intermediate</option>
                                        <option>Intermediate</option>
                                        <option>Pre-Advance</option>
                                        <option>Advance</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <h3>English </h3>
                            <label>Status</label>
                            <div class="custom-dropdown">
                                    <select id="ddlTransEng">
                                        <option>Level up</option>
                                        <option>Remains</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Level</label>
                            <div class="custom-dropdown">
                                    <select id="ddlLevelEng">
                                        <option>Early Beginner</option>
                                        <option>Beginner</option>
                                        <option>Pre-Intermediate</option>
                                        <option>Intermediate</option>
                                        <option>Pre-Advance</option>
                                        <option>Advance</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <h3>Mathematics</h3>
                            <label>Status</label>
                            <div class="custom-dropdown">
                                    <select id="ddlTransMaths">
                                        <option>Level up</option>
                                        <option>Remains</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Level</label>
                            <div class="custom-dropdown">
                                    <select id="ddlLevelMaths">
                                        <option>Early Beginner</option>
                                        <option>Beginner</option>
                                        <option>Pre-Intermediate</option>
                                        <option>Intermediate</option>
                                        <option>Pre-Advance</option>
                                        <option>Advance</option>
                                    </select>
                                    <div class="dropdown-icon">
                                        <i class="fas fa-chevron-down"></i>
                                    </div>
                            </div><br /><br />
                            <label>Teacher's Note : </label>
                            <textarea id="txtTransTeachNote" name="teacherNote" placeholder="Teacher's note" ></textarea>
                            
                            <asp:Button ID="btnPrevious9" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious9_Click"/>
                            <asp:Button ID="btnSubmitIEP" runat="server" CssClass="custom-button" Text="Submit"/>
                        </div>
                    </div>
                    </asp:Panel>
                    <asp:Panel ID="tCoheranPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Coheran report</h2>
                            <div class="form-field">
                                <label>Select student :</label>
                                <div class="custom-dropdown">
                                <select id="ddlstudent" name="students">
                                    <option>Student 1</option>
                                    <option>Student 2</option>
                                    <option>Student 3</option>
                                    <option>Student 4</option>
                                    <option>Student 5</option>
                                </select>
                                <div class="dropdown-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                </div>
                                <br /><br />
                                <label>Red score : </label>
                                <asp:TextBox ID="txtRedScore" runat="server"></asp:TextBox><br /><br />
                                <label>Green score : </label>
                                <asp:TextBox ID="txtGreenScore" runat="server"></asp:TextBox><br /><br />
                                <label>Blue score : </label>
                                <asp:TextBox ID="txtBlueScore" runat="server"></asp:TextBox><br /><br />
                                <label>Achieved score : </label>
                                <asp:TextBox ID="txtAchieveScore" runat="server"></asp:TextBox><br /><br />
                                <label>Remark : </label>
                                <asp:TextBox ID="txtRemark" runat="server"></asp:TextBox><br /><br />

                                <asp:Button ID="btnSubmitCoheran" runat="server" CssClass="custom-button" Text="Submit"/>
                           </div>
                        </div>
                    </asp:Panel>
                </div> 
            </div>
        </div>
    </form>
</x-app-layout>
