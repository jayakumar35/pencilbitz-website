                <div class="bg-white p-6 rounded-2xl shadow w-full max-w-md mx-auto mt-10">
                    <h2 class="text-xl font-semibold mb-4">Get Your Certificate</h2>

                    <label class="block mb-3">
                        <span class="text-sm text-gray-600">Enter Author Phone Number</span>
                        <input id="authorNumber" type="password" placeholder="Enter Author Number"
                            class="mt-2 block w-full rounded border border-gray-300 p-2 focus:ring-2 focus:ring-indigo-500" />
                    </label>

                    <div id="message" class="text-sm text-red-600 mb-3 hidden">Invalid Author Phone Number!</div>

                    <button id="verifyBtn"
                        class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                        Verify
                    </button>

                    <div id="downloadSection" class="mt-5 hidden">
                        <p class="text-sm text-gray-600 mb-2">Download your certificate:</p>
                        <div class="flex gap-4">
                            <a href="assets/img/books-certificate/Essentials of Financial Analytics using Excel and R a1.pdf"
                                download
                                class="px-3 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                                Download PDF
                            </a>
                            <a href="assets/img/books-certificate/Essentials of Financial Analytics using Excel and R a1_page-0001.jpg"
                                download
                                class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Download JPG
                            </a>
                        </div>
                    </div>
                </div>

                <script>
                    const input = document.getElementById("authorPhoneNumber");
                    const message = document.getElementById("message");
                    const verifyBtn = document.getElementById("verifyBtn");
                    const downloadSection = document.getElementById("downloadSection");

                    verifyBtn.addEventListener("click", async () => {
                        const formData = new FormData();
                        formData.append("authorPhoneNumber", input.value);

                        const response = await fetch("verify.php", {
                            method: "POST",
                            body: formData
                        });
                        const data = await response.json();

                        if (data.valid) {
                            message.classList.add("hidden");
                            downloadSection.classList.remove("hidden");
                            verifyBtn.disabled = true;
                            verifyBtn.textContent = "Verified ✅";
                            input.disabled = true;
                        } else {
                            message.classList.remove("hidden");
                        }
                    });
                </script>
                <?php
                header('Content-Type: application/json');

                $authorPhoneNumber = $_POST['authorPhoneNumber'] ?? '';
                $validAuthorPhoneNumber = '9600444121'; // ✅ No spaces — match exactly what user will enter

                if ($authorPhoneNumber === $validAuthorPhoneNumber) {
                    echo json_encode(['valid' => true]);
                } else {
                    echo json_encode(['valid' => false]);
                }
                ?>
