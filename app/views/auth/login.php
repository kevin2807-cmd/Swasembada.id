<div style="display: flex; align-items: center; justify-content: center; min-height: 75vh; padding: 20px;">
    
    <div class="card" style="width: 100%; max-width: 400px; padding: 40px; box-sizing: border-box; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.08);">
        
        <h2 style="margin-top: 0; margin-bottom: 25px; color: #1a3d1a; text-align: center;">Login / Masuk</h2>
        
        <?php if (isset($_SESSION['error_login'])) : ?>
            <div style="background: #ffcccc; color: #cc0000; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9rem; text-align: center;">
                <?= $_SESSION['error_login']; ?>
                <?php unset($_SESSION['error_login']); // Hapus error setelah ditampilkan ?>
            </div>
        <?php endif; ?>

        <form action="<?= BASEURL; ?>/auth/login" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" name="username" placeholder="Username" required 
                   style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; outline: none; transition: 0.3s;"
                   onfocus="this.style.borderColor='#2d6a2d'" onblur="this.style.borderColor='#ddd'">
            
            <input type="password" name="password" placeholder="Password" required 
                   style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; outline: none; transition: 0.3s;"
                   onfocus="this.style.borderColor='#2d6a2d'" onblur="this.style.borderColor='#ddd'">
            
            <button type="submit" style="background: #a8d878; color: #1a3d1a; border: none; cursor: pointer; width: 100%; padding: 14px; margin-top: 10px; font-size: 1rem; font-weight: 700; border-radius: 8px; transition: 0.2s;"
                    onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                Masuk Sistem
            </button>
        </form>

    </div>
</div>