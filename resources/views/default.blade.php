       <header>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <li><asp:LinkButton ID="dashboardLink" runat="server" CssClass="active" OnClick="dashboardLink_Click">Dashboard</asp:LinkButton></li>
                        <li><asp:LinkButton ID="reviewLink" runat="server" CssClass="active" OnClick="reviewLink_Click">Review</asp:LinkButton></li>
                        <li><asp:LinkButton ID="resultLink" runat="server" CssClass="active" OnClick="resultLink_Click">Past results</asp:LinkButton></li>
                        <li><asp:LinkButton ID="iepLink" runat="server" CssClass="active" OnClick="iepLink_Click">View IEP</asp:LinkButton></li>
                    </ul>
                </div>
                <div class="main-content">
                    <asp:Panel ID="chartPanel" runat="server">
                        <div class="card-container">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 1</h5>
                                    <canvas id="myChart1" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 2</h5>
                                    <canvas id="myChart2" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 3</h5>
                                    <canvas id="myChart3" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 4</h5>
                                    <canvas id="myChart4" width="400" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-container">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 5</h5>
                                    <canvas id="myChart5" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 6</h5>
                                    <canvas id="myChart6" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 7</h5>
                                    <canvas id="myChart7" width="400" height="400"></canvas>
                                </div>
                            </div>
                            <div class="card card-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Week 8</h5>
                                    <canvas id="myChart8" width="400" height="400"></canvas>
                                    
                                </div>
                            </div>
                            <script src="Scripts/WebForms/Chart.js"></script>
                        </div>

                    </asp:Panel>
                    <asp:Panel ID="reviewPanel" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">Reviews</h2>
                        <div class="form-field">
                            <label for="day">Day:</label>
                            <div class="custom-dropdown">
                                <select id="day" name="day">
                                    <option value="monday">Monday</option>
                                    <option value="tuesday">Tuesday</option>
                                    <option value="wednesday">Wednesday</option>
                                    <option value="thursday">Thursday</option>
                                    <option value="friday">Friday</option>
                                </select>
                                <div class="dropdown-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-field">
                            <label for="week">Week:</label>
                            <div class="custom-dropdown">
                            <select id="week" name="week">
                                <option value="week1">Week 1</option>
                                <option value="week2">Week 2</option>
                                <option value="week3">Week 3</option>
                                <option value="week4">Week 4</option>
                                <option value="week5">Week 5</option>
                                <option value="week6">Week 6</option>
                                <option value="week7">Week 7</option>
                                <option value="week8">Week 8</option>
                            </select>
                                <div class="dropdown-icon">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-field">
                            <asp:Button ID="btnReviewSubmit" runat="server" Text="Submit" CssClass="custom-button" UseSubmitBehavior="False"/>
                        </div>
                        <div class="form-field">
                            <label for="reviews">Reviews:</label>
                            <textarea id="reviews" name="reviews" placeholder="Teacher's review for the day" aria-readonly="False" readonly="readonly"></textarea>
                        </div>
                    </div>
                </asp:Panel>
                    <asp:Panel ID="resultPanel" runat="server">
                        <div class="form-container">
                            <h2 class="form-title">Exam Results</h2>
                            <div class="form-field">
                                <label for="searchOption">Exam category: </label>
                                <select class="custom-select" id="searchOption" name="searchOption" runat="server">
                                    <option value="lessonExam">Lesson Exam</option>
                                    <option value="levelExam">Final Exam</option>
                                </select>
                            </div>
                                <div class="form-field">
                                    <label for="searchSubject">Subject:</label>
                                    <select class="custom-select" id="searchSubject" name="searchSubject" runat="server">
                                        <option value="bm">Bahasa Malaysia</option>
                                        <option value="maths">Mathematics</option>
                                        <option value="english">English</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <label for="searchTerm">Term:</label>
                                    <select class="custom-select" id="searchTerm" name="searchTerm">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class="form-field">
                                    <asp:Button ID="btnResultSubmit" runat="server" Text="Submit" CssClass="custom-button" OnClick="btnResultSubmit_Click" CausesValidation="False" UseSubmitBehavior="False"/>
                                </div>
                            <table id="resultsTable" class="results-table" style="display: none;" runat="server">
                                <thead>
                                    <tr>
                                        <th>Student</th>
                                        <th>Exam Score</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </asp:Panel>
                    <asp:Panel ID="iepChoosePanel" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>Term : </h3>
                            <select class="custom-select" id="iepTerm" name="iepTerm">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="form-field">
                            <asp:Button ID="btnSearchIep" runat="server" CssClass="custom-button" Text="Search" OnClick="btnSearchIep_Click" />
                        </div>
                    </div>
                    </asp:Panel>

                    <asp:Panel ID="iepPanel" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>1. BioDyslexia Multisensory Screening VAKT Coherence Record</h3>
                            <label for="visualBM">Visual (BM): </label>
                            <asp:TextBox ID="txtVisualBM" runat="server"></asp:TextBox><br /><br />
                            <label for="visualEnglish">Visual (English): </label>
                            <asp:TextBox ID="txtVisualEng" runat="server"></asp:TextBox><br /><br />
                            <label for="visualMaths">Visual (Mathematics): </label>
                            <asp:TextBox ID="txtVisualMaths" runat="server"></asp:TextBox><br /><br />
                            <label for="auditoryBM">Auditory (BM): </label>
                            <asp:TextBox ID="txtAudioBM" runat="server"></asp:TextBox><br /><br />
                            <label for="auditoryEnglish">Auditory (English): </label>
                            <asp:TextBox ID="txtAudioEng" runat="server"></asp:TextBox><br /><br />
                            <label for="auditoryMaths">Auditory (Mathematics): </label>
                            <asp:TextBox ID="txtAudioMaths" runat="server"></asp:TextBox><br /><br />
                            <label for="ktBM">Kinesthetic Tactile (BM): </label>
                            <asp:TextBox ID="txtKtBM" runat="server"></asp:TextBox><br /><br />
                            <label for="ktEnglish">Kinesthetic Tactile (English): </label>
                            <asp:TextBox ID="txtKtEng" runat="server"></asp:TextBox><br /><br />
                            <label for="ktMaths">Kinesthetic Tactile (Mathematics): </label>
                            <asp:TextBox ID="txtKtMaths" runat="server"></asp:TextBox><br /><br />
                            <asp:Button ID="btnNext" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext_Click" />
                        </div>
                    </div>
                    </asp:Panel>
                    <asp:Panel ID="iepPanel2" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>2. Student's areas of strength and areas of need</h3>
                            <label for="strengthBM">Strength (BM): </label>
                            <asp:TextBox ID="txtStrengthBM" runat="server"></asp:TextBox><br /><br />
                            <label for="strengthEnglish">Strength (English): </label>
                            <asp:TextBox ID="txtStrengthEng" runat="server"></asp:TextBox><br /><br />
                            <label for="strengthMaths">Strength (Mathematics): </label>
                            <asp:TextBox ID="txtStrengthMaths" runat="server"></asp:TextBox><br /><br />
                            <label for="needBM">Need (BM): </label>
                            <asp:TextBox ID="txtNeedBM" runat="server"></asp:TextBox><br /><br />
                            <label for="needEnglish">Need (English): </label>
                            <asp:TextBox ID="txtNeedEng" runat="server"></asp:TextBox><br /><br />
                            <label for="needMaths">Need (Mathematics): </label>
                            <asp:TextBox ID="txtNeedMaths" runat="server"></asp:TextBox><br /><br />
                            <label for="abilities">Abilities: </label>
                            <asp:TextBox ID="txtAbilities" runat="server"></asp:TextBox><br /><br />
                            <label for="abilitiesHelp">Abilities require assistance: </label>
                            <asp:TextBox ID="txtAbilitiesHelp" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext2" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext2_Click" />
                            <asp:Button ID="btnPrevious2" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious2_Click" />
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
                            <label for="textGiven">Text given: </label>
                            <asp:Image ID="imgReadGiven" runat="server" />
                            <label for="textRead">Student read upto: </label>
                            <textarea id="txtReadTill" name="readTill" placeholder="Student read upto" aria-readonly="False" readonly="readonly"></textarea>
                            <label for="readSpeed">Read speed: </label>
                            <asp:TextBox ID="txtReadSpeed" runat="server"></asp:TextBox><br /><br />
                            <h3>Writing</h3>
                            <label for="writeGiven">Text given: </label>
                            <asp:Image ID="imgWriteGiven" runat="server" />
                            <label for="stuWriting">Student writing: </label>
                            <asp:Image ID="imgStuWriting" runat="server" />
                            <label for="score90s">Number of Letters Copied in 90 seconds: </label>
                            <asp:TextBox ID="txtScore90s" runat="server"></asp:TextBox><br /><br />
                            <label for="scoreMin">Number of Letters Copied in 90 seconds Divided by 1.5 = Letters Per Minutes (LPM) </label>
                            <asp:TextBox ID="txtScoreMin" runat="server"></asp:TextBox><br /><br />
                            <label for="writeSpeed">Write speed: </label>
                            <asp:TextBox ID="txtWriteSpeed" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext3" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext3_Click" />
                            <asp:Button ID="btnPrevious3" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious3_Click" />
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
                            <label for="textGiven">Teks diberi: </label>
                            <asp:Image ID="imgTeksDiberi" runat="server" />
                            <label for="textDibaca">Teks dibaca: </label>
                            <textarea id="txtDibaca" name="readTill" placeholder="Pelajar membaca sehingga" aria-readonly="False" readonly="readonly"></textarea>
                            <label for="readSpeed">Kelajuan membaca: </label>
                            <asp:TextBox ID="txtLajuBaca" runat="server"></asp:TextBox><br /><br />
                            <h3>Menulis</h3>
                            <label for="writeGiven">Teks diberi: </label>
                            <asp:Image ID="imgTulisDiberi" runat="server" />
                            <label for="stuWriting">Pelajar menulis: </label>
                            <asp:Image ID="imgMenulis" runat="server" />
                            <label for="score90s">Jumlah perkataan ditulis dalam 90s: </label>
                            <asp:TextBox ID="txtMarkah90s" runat="server"></asp:TextBox><br /><br />
                            <label for="scoreMin">Jumlah perkataan ditulis dalam 90s dibahagi 1.5 = Letters Per Minutes (LPM) </label>
                            <asp:TextBox ID="txtMarkahMinit" runat="server"></asp:TextBox><br /><br />
                            <label for="writeSpeed">Kelajuan menulis: </label>
                            <asp:TextBox ID="txtLajuTulis" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext4" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext4_Click" />
                            <asp:Button ID="btnPrevious4" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious4_Click" />
                        </div>
                    </div>
                    </asp:Panel>
                    <asp:Panel ID="iepPanel5" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>4. Reading and Writing Test Result</h3>
                            <label for="avgReadSpeed">Average Reading Speed (Real Age): </label>
                            <asp:TextBox ID="txtAvgReadSpeed" runat="server"></asp:TextBox><br /><br />
                            <label for="ageReadSpeed">Age according to Test Reading Speed : </label>
                            <asp:TextBox ID="txtAgeReadSpeed" runat="server"></asp:TextBox><br /><br />
                            <label for="handwriteSpeed">Handwriting Speed (Letters per minute) Real Age: </label>
                            <asp:TextBox ID="txtHandSpeed" runat="server"></asp:TextBox><br /><br />
                            <label for="ageHandSpeed">Age according to Test Handwritting Speed : </label>
                            <asp:TextBox ID="txtAgeHandSpeed" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext5" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext5_Click" />
                            <asp:Button ID="btnPrevious5" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious5_Click" />
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
                            <asp:TextBox ID="txtPosture" runat="server"></asp:TextBox><br /><br />
                            <label for="pencilGrip">Pencil Grip : </label>
                            <asp:TextBox ID="txtPencilGrip" runat="server"></asp:TextBox><br /><br />
                            <label for="paperPosition">Paper Position: </label>
                            <asp:TextBox ID="txtPaperPos" runat="server"></asp:TextBox><br /><br />
                            <h3>General Letter Formation</h3>
                            <label for="legible">Legible : </label>
                            <asp:TextBox ID="txtLegible" runat="server"></asp:TextBox><br /><br />
                            <label for="shapeSize">Correct letter shape and size : </label>
                            <asp:TextBox ID="txtShapeSize" runat="server"></asp:TextBox><br /><br />
                            <label for="textSpace">Even spaces between letters : </label>
                            <asp:TextBox ID="txtSpace" runat="server"></asp:TextBox><br /><br />
                            <label for="writtingLine">Sits neatly on writting line : </label>
                            <asp:TextBox ID="txtWrittingLine" runat="server"></asp:TextBox><br /><br />
                            
                            <asp:Button ID="btnNext6" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext6_Click" />
                            <asp:Button ID="btnPrevious6" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious6_Click" />
                        </div>
                    </div>
                    </asp:Panel>
                    <asp:Panel ID="iepPanel7" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>4. Reading and Writing Test Result</h3>
                            <h3>Lower case letter formation</h3>
                            <label for="aboveLetter">Above the Line Letters = b, d, f, h, k, l, t : </label>
                            <asp:TextBox ID="txtAboveLetter" runat="server"></asp:TextBox><br /><br />
                            <label for="belowLetter">Below the Line Letters = g, j, p, q, y : </label>
                            <asp:TextBox ID="txtBelowLetter" runat="server"></asp:TextBox><br /><br />
                            <label for="curlyLetter">Curly Letters = a, c, e, m, n, o, s, u : </label>
                            <asp:TextBox ID="txtCurlyLetter" runat="server"></asp:TextBox><br /><br />
                            <label for="cornerLetter">Letters with Corners = i, r, v, w, x, z : </label>
                            <asp:TextBox ID="txtCornerLetter" runat="server"></asp:TextBox><br /><br />
                            <h3>Upper case letter formation</h3>
                            <label for="letterSize">Correct capital letter size : </label>
                            <asp:TextBox ID="txtCorrectSize" runat="server"></asp:TextBox><br /><br />
                            <label for="verticalLetter">Vertical Lines Formed Top to Bottom : </label>
                            <asp:TextBox ID="txtVerticalLine" runat="server"></asp:TextBox><br /><br />
                            <label for="horizontalLetter">Horizontal Lines Formed Left to Right : </label>
                            <asp:TextBox ID="txtHorizontalLine" runat="server"></asp:TextBox><br /><br />
                            
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
                            
                            <asp:Button ID="btnNext8" runat="server" CssClass="custom-button" Text="Next" OnClick="btnNext8_Click" />
                            <asp:Button ID="btnPrevious8" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious8_Click" />
                        </div>
                    </div>
                    </asp:Panel>
                    <asp:Panel ID="iepPanel9" runat="server">
                    <div class="form-container">
                        <h2 class="form-title">IEP</h2>
                        <div class="form-field">
                            <h3>6. Transition</h3>
                            <label>Level : </label>
                            <asp:TextBox ID="txtTransLevel" runat="server"></asp:TextBox><br /><br />
                            <label>Subject : </label>
                            <asp:TextBox ID="txtTransSubject" runat="server"></asp:TextBox><br /><br /><br />
                            <label>Decision : </label>
                            <asp:TextBox ID="txtTransDecision" runat="server"></asp:TextBox><br /><br />
                            <label>Teacher's Note : </label>
                            <textarea id="txtTransTeachNote" name="teacherNote" placeholder="Teacher's note" aria-readonly="False" readonly="readonly"></textarea>
                            
                            <asp:Button ID="btnPrevious9" runat="server" CssClass="custom-button" Text="Previous" OnClick="btnPrevious9_Click" />
                        </div>
                    </div>
                    </asp:Panel>
                </div>
            </div>
           
        </div>
        </form>
