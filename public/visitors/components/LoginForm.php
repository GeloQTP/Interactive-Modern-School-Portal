 <form id="loginForm">

     <!-- Email -->
     <div class="form-floating mb-3">
         <input
             type="email"
             class="form-control form-control-sm"
             name="email"
             placeholder="name@example.com"
             autocomplete="email"
             required>
         <label for="loginEmail">
             <i class="bi bi-envelope me-1"></i>Email address
         </label>
     </div>

     <!-- Password -->
     <div class="form-floating mb-3">
         <input
             type="password"
             class="form-control"
             name="password"
             placeholder="Password"
             required>
         <label for="loginPassword">
             <i class="bi bi-lock me-1"></i>Password
         </label>
     </div>

     <!-- Remember & Forgot -->
     <div class="d-flex justify-content-between align-items-center mb-4">
         <div class="form-check">
             <input class="form-check-input" type="checkbox" id="rememberMe">
             <label class="form-check-label" for="rememberMe">
                 Remember me
             </label>
         </div>
         <a href="#" class="text-decoration-none small text-success">
             Forgot password?
         </a>
     </div>

     <!-- Button -->
     <button
         type="submit"
         class="btn btn-success w-100 py-2 fw-semibold">
         Login
     </button>

 </form>