// =====================================================
// CV BIMA TECHNOLOGIES
// SYSTEM JAVASCRIPT (Laravel & Standalone Compatible)
// =====================================================

// =====================================================
// LOGIN STATUS
// =====================================================
const isLogin = localStorage.getItem("isLogin");

// =====================================================
// LOGIN
// =====================================================
const loginForm = document.getElementById("loginForm");

if (loginForm) {
    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value;
        const message = document.getElementById("loginMessage");

        // =====================================
        // LOGIN DEMO
        // =====================================
        if (username === "admin" && password === "12345") {
            localStorage.setItem("isLogin", "true");
            localStorage.setItem("username", username);

            message.textContent = "✓ Login berhasil. Mengarahkan ke dashboard...";
            message.className = "login-message success-text";

            setTimeout(function() {
                window.location.href = window.location.pathname.includes(".html")
                    ? "dashboard.html"
                    : "/dashboard";
            }, 700);
        } else {
            message.textContent = "Username atau password salah.";
            message.className = "login-message error-text";
        }
    });
}

// =====================================================
// NAMA USER DASHBOARD
// =====================================================
const welcomeUser = document.getElementById("welcomeUser");

if (welcomeUser) {
    const username = localStorage.getItem("username");
    if (username) {
        welcomeUser.textContent = username;
    }
}

// =====================================================
// LOGOUT
// =====================================================
function logout() {
    const confirmLogout = confirm("Apakah kamu yakin ingin logout?");
    if (!confirmLogout) {
        return;
    }

    const confirmAgain = confirm("Kamu akan keluar dari dashboard dan harus login kembali. Lanjutkan?");
    if (!confirmAgain) {
        return;
    }

    localStorage.removeItem("isLogin");
    localStorage.removeItem("username");

    window.location.href = window.location.pathname.includes(".html")
        ? "login.html"
        : "/login";
}

// =====================================================
// DOKUMEN
// =====================================================
function getDocuments() {
    const documents = localStorage.getItem("bimaDocuments");
    if (!documents) {
        return [];
    }
    try {
        return JSON.parse(documents);
    } catch (error) {
        return [];
    }
}

// =====================================================
// SIMPAN DOKUMEN
// =====================================================
function saveDocuments(documents) {
    localStorage.setItem("bimaDocuments", JSON.stringify(documents));
}

// =====================================================
// FORMAT UKURAN FILE
// =====================================================
function formatFileSize(bytes) {
    if (bytes === 0) {
        return "0 Bytes";
    }

    const sizes = ["Bytes", "KB", "MB", "GB"];
    const i = Math.floor(Math.log(bytes) / Math.log(1024));

    return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + " " + sizes[i];
}

// =====================================================
// FORM UPLOAD DOKUMEN
// =====================================================
const documentForm = document.getElementById("documentForm");

if (documentForm) {
    documentForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const name = document.getElementById("documentName").value.trim();
        const type = document.getElementById("documentType").value;
        const file = document.getElementById("documentFile").files[0];
        const result = document.getElementById("documentResult");

        if (!file) {
            result.innerHTML = `
                <div class="error-document">
                    Silakan pilih file terlebih dahulu.
                </div>
            `;
            return;
        }

        const maxSize = 4 * 1024 * 1024;
        if (file.size > maxSize) {
            result.innerHTML = `
                <div class="error-document">
                    Ukuran file terlalu besar.
                    Maksimal 4 MB untuk penyimpanan browser.
                </div>
            `;
            return;
        }

        const reader = new FileReader();

        reader.onload = function(e) {
            const documents = getDocuments();

            const newDocument = {
                id: Date.now(),
                name: name,
                type: type,
                fileName: file.name,
                fileSize: file.size,
                fileSizeText: formatFileSize(file.size),
                fileData: e.target.result,
                date: new Date().toLocaleString("id-ID")
            };

            documents.push(newDocument);
            saveDocuments(documents);

            documentForm.reset();

            result.innerHTML = `
                <div class="success-document">
                    ✓ Dokumen berhasil dimasukkan.
                </div>
            `;

            renderDocuments();
        };

        reader.readAsDataURL(file);
    });
}

// =====================================================
// TAMPILKAN DOKUMEN
// =====================================================
function renderDocuments() {
    const list = document.getElementById("documentList");
    if (!list) {
        return;
    }

    const documents = getDocuments();

    const documentCount = document.getElementById("documentCount");
    const documentCountLarge = document.getElementById("documentCountLarge");

    if (documentCount) {
        documentCount.textContent = documents.length;
    }

    if (documentCountLarge) {
        documentCountLarge.textContent = documents.length;
    }

    if (documents.length === 0) {
        list.innerHTML = `
            <div class="empty-document">
                <div class="empty-icon">📁</div>
                <h3>Belum Ada Dokumen</h3>
                <p>Dokumen perusahaan yang kamu upload akan muncul di sini.</p>
            </div>
        `;
        return;
    }

    list.innerHTML = "";

    documents
        .slice()
        .reverse()
        .forEach(function(doc) {
            const item = document.createElement("div");
            item.className = "document-item";
            item.innerHTML = `
                <div class="document-file-icon">
                    ${getFileIcon(doc.fileName)}
                </div>

                <div class="document-info">
                    <h3>${escapeHTML(doc.name)}</h3>
                    <p>${escapeHTML(doc.fileName)}</p>

                    <div class="document-meta">
                        <span>${escapeHTML(doc.type)}</span>
                        <span>${doc.fileSizeText}</span>
                        <span>${doc.date}</span>
                    </div>
                </div>

                <div class="document-actions">
                    <button type="button" onclick="viewDocument(${doc.id})" class="document-view">
                        Lihat
                    </button>
                    <button type="button" onclick="deleteDocument(${doc.id})" class="document-delete">
                        Hapus
                    </button>
                </div>
            `;
            list.appendChild(item);
        });
}

// =====================================================
// ICON FILE
// =====================================================
function getFileIcon(fileName) {
    const extension = fileName.split(".").pop().toLowerCase();

    if (extension === "pdf") return "PDF";
    if (extension === "doc" || extension === "docx") return "DOC";
    if (extension === "xls" || extension === "xlsx") return "XLS";
    if (extension === "jpg" || extension === "jpeg" || extension === "png") return "IMG";

    return "FILE";
}

// =====================================================
// LIHAT / DOWNLOAD DOKUMEN
// =====================================================
function viewDocument(id) {
    const documents = getDocuments();
    const doc = documents.find(function(item) {
        return item.id === id;
    });

    if (!doc) return;

    const link = document.createElement("a");
    link.href = doc.fileData;
    link.download = doc.fileName;
    link.target = "_blank";

    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

// =====================================================
// HAPUS DOKUMEN
// =====================================================
function deleteDocument(id) {
    const confirmDelete = confirm("Apakah kamu yakin ingin menghapus dokumen ini?");
    if (!confirmDelete) return;

    let documents = getDocuments();
    documents = documents.filter(function(doc) {
        return doc.id !== id;
    });

    saveDocuments(documents);
    renderDocuments();
}

// =====================================================
// HAPUS SEMUA DOKUMEN
// =====================================================
function clearAllDocuments() {
    const documents = getDocuments();
    if (documents.length === 0) {
        alert("Belum ada dokumen yang tersimpan.");
        return;
    }

    const confirmDelete = confirm("Apakah kamu yakin ingin menghapus SEMUA dokumen?");
    if (!confirmDelete) return;

    localStorage.removeItem("bimaDocuments");
    renderDocuments();
}

// =====================================================
// KEAMANAN HTML
// =====================================================
function escapeHTML(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
}

// =====================================================
// LOAD DOKUMEN SAAT DASHBOARD DIBUKA
// =====================================================
document.addEventListener("DOMContentLoaded", function() {
    renderDocuments();
});
