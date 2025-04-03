<button class="btn btn-primary" id="loginBtn" onclick="document.getElementById('loginModal').style.display='flex'">Login</button>

<!-- Modal -->
<div id="loginModal" class="modal" style="display: none;">
<div class="modal-content">
  <a href="#" class="close" onclick="document.getElementById('loginModal').style.display='none'">&times;</a>
  <h2>Mentee Login</h2>
  <form>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" placeholder="Enter your email" required>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Enter your password" required>
  
  <button onclick="checkStuLogin()" type="button" class="btn btn-primary" >Submit</button>

  </form>
  <a href="pages/adminlogin.php" style="text-decoration: underline; display:flex; justify-content:center; margin: 5px;">Admin</a>
</div>
</div>

<style>
/* Modal styles */
.modal {
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  width: 90%;
  max-width: 400px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  text-align: center;
}

.modal-content h2 {
  margin-bottom: 20px;
}

.modal-content label {
  display: block;
  margin: 10px 0 5px;
  text-align: left;
}

.modal-content input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.modal-content .btn {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.modal-content .btn:hover {
  background-color: #0056b3;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
  text-decoration: none;
}

.close:hover,
.close:focus {
  color: black;
}
</style>