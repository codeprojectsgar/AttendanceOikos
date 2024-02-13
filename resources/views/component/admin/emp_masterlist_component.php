<div class="container-emp-list">
        <div class="employee-list">
                <div class="header-emp-list"><h3>Employee List</h3>
                    <div class="search-emp-list">
                        <input type="text" id="search-bar" size="30" placeholder="Search...">
                    </div>
                    <table class="emp-masterlist" style="width: 100%;">
                        <thead>
                            <tr>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> QR</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> ID</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> Name</th>
                                <th><button><i class="fa-solid fa-filter"></i></button> Role</th>
                                <th><button><i class="fa-solid fa-arrow-down-wide-short"></i></button> Date</th>
                                <th><button><i class="fa-solid fa-filter"></i></button> Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="emp-masterlist-body" >
                            <tr>
                                <td>T570</td>
                                <td>0570</td>
                                <td>Amy Wulfhardt</td>
                                <td>Teacher</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T571</td>
                                <td>0571</td>
                                <td>Ryan Gosling</td>
                                <td>Teacher</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT572</td>
                                <td>0572</td>
                                <td>Gawr Gura</td>
                                <td>IT</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A573</td>
                                <td>0573</td>
                                <td>Amelia Watson</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT574</td>
                                <td>0574</td>
                                <td>Mori Calliope</td>
                                <td>IT</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T575</td>
                                <td>0575</td>
                                <td>Usada Pekora</td>
                                <td>Teacher</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T576</td>
                                <td>0576</td>
                                <td>Shirokami Fubuki</td>
                                <td>Teacher</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A577</td>
                                <td>0577</td>
                                <td>Rin Penrose</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT578</td>
                                <td>0578</td>
                                <td>Gin Penrose</td>
                                <td>IT</td>
                                <td>03/23/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>IT579</td>
                                <td>0579</td>
                                <td>Amano Pikamee</td>
                                <td>IT</td>
                                <td>02/21/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T580</td>
                                <td>0580</td>
                                <td>Uruha Rusia</td>
                                <td>Teacher</td>
                                <td>02/04/2024</td>
                                <td style="color: green">Active</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>T581</td>
                                <td>0581</td>
                                <td>Asa Coco</td>
                                <td>Teacher</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>A582</td>
                                <td>0582</td>
                                <td>Tokino Sora</td>
                                <td>Admin</td>
                                <td>02/03/2024</td>
                                <td style="color: red">Inactive</td>
                                <td><button class="action-btn"><i class="fa-solid fa-pencil"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        <div class="eml-modal-mask hidden">
            <div class="eml-form-container">
                <div class="eml-details">
                    <div class="emp-icon">
                        <img src="../assets/testpic.png" alt="emp icon" class="emp-img">
                    </div>
                    <div class="emp-name">
                        Django Freeman<br><i>Teacher</i>
                    </div>
                    <div class="emp-status">
                        <button class="status-btn">
                            Status
                        </button>
                    </div>
                    <div class="emp-role">
                        <button class="role-btn">
                            Role
                        </button>
                    </div>
                </div>
                <div class="eml-selection">
                    <h2>Edit Status</h2>
                    <label for="select-status">Status</label>
                    <select id="select-status" class="selection">
                        <option value="Active">
                            Active
                        </option>
                        <option value="Inactive">
                            Inactive
                        </option>
                    </select>
                    <button class="btn-save">Save Status</button>
                </div>
                <div class="eml-modal-close">
                    <i class="far fa-times-circle" style="font-size:1.5rem;cursor:pointer;"></i>
                </div>
            </div>
        </div>

        <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let toggleModals = document.querySelectorAll('.action-btn');
        let showModal = document.querySelector('.eml-modal-mask');
        let closeModal = document.querySelector('.far');
        let select = document.querySelector('select');
        btn.onclick = function () {
            sidebar.classList.toggle('active');
        }
        for (let i=0; i<toggleModals.length; i++){
            toggleModals[i].onclick=()=>{ showModal.classList.remove('hidden') }
        }
        closeModal.onclick=()=>{
            showModal.classList.toggle('hidden');
        }

        let roleButton = document.querySelector('.role-btn');
        let emlSelection = document.querySelector('.eml-selection');

        roleButton.addEventListener('click', function() {
            emlSelection.innerHTML = `
                <h2>Edit Role</h2>
                <label for="select-role">Role</label>
                <select id="select-role" class="selection">
                    <option value="Teacher">Teacher</option>
                    <option value="IT">IT</option>
                    <option value="Admin">Admin</option>
                </select>
                <button class="btn-save">Save Role</button>
            `;})

        let statusButton = document.querySelector('.status-btn');
        statusButton.addEventListener('click', function() {
            emlSelection.innerHTML = `
                <h2>Edit Status</h2>
                <label for="select-status">Status</label>
                <select id="select-status" class="selection">
                    <option value="Active">
                        Active
                    </option>
                    <option value="Inactive">
                        Inactive
                    </option>
                </select>
                <button class="btn-save">Save Status</button>
            `;})
        
        let newCloseModal = document.querySelector('.far');
        newCloseModal.addEventListener('click', function() {
            showModal.classList.add('hidden');
        });

        </script>

        