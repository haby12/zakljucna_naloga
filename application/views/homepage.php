  <div id="vsebina" class="col-lg-10 col-md-9 col-sm-9 cd no-float">
      <div class = "ena">
      <h2><?php echo ucfirst($this->input->post('username')); ?>, izpolni naslednji vprašalnik</h2>
      <form name = "vprasalnik" action = "rezultat" method="post">
          <p></p>
          <table border = "0">
              <tr>
                  <th>Vprašalnik</th>
                  <th colspan = "5">Možnosti</th>
              </tr>    

              <tr>
                <td>Prvo testno vprašanje</td>
                <td>1: <input type="radio" required name="vpra1" value="1"></td>
                <td>2: <input type="radio" required name="vpra1" value="2"></td>
                <td>3: <input type="radio" required name="vpra1" value="3"></td>
                <td>4: <input type="radio" required name="vpra1" value="4"></td>
                <td>5: <input type="radio" required name="vpra1" value="5"></td>
            </tr> 
            <tr>
                <td>Drugo testno vprašanje</td>
                <td>1: <input type="radio" required name="vpra2" value="1"></td>
                <td>2: <input type="radio" required name="vpra2" value="2"></td>
                <td>3: <input type="radio" required name="vpra2" value="3"></td>
                <td>4: <input type="radio" required name="vpra2" value="4"></td>
                <td>5: <input type="radio" required name="vpra2" value="5"></td>
                </tr>
            <tr>
                <td>Tretje testno vprašanje</td>
                <td>1: <input type="radio" required name="vpra3" value="1"></td>
                <td>2: <input type="radio" required name="vpra3" value="2"></td>
                <td>3: <input type="radio" required name="vpra3" value="3"></td>
                <td>4: <input type="radio" required name="vpra3" value="4"></td>
                <td>5: <input type="radio" required name="vpra3" value="5"></td>    
          </table>    
          <br>
          <input type="submit" required value="Posreduj podatke">
      </form>
      </div>
  </div>