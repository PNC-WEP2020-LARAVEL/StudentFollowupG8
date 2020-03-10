<form action="{{route('student.store')}}">
    <input type="text" name="firstname" placeholder="firstname..." class="form-control">
    <br>
    <br>
    <input type="text" name="lastname" placeholder="lastname..." class="form-control">
    <br>
    <br>
    <input type="radio" id="male" name="gender" value="male"> Male
    <input type="radio" id="female" name="gender" value="female"> Female
    <br>
    <br>
    <select name="class" id="class">
        <option value="WEP2020-A">WEP2020-A</option>
        <option value="WEP2020-B">WEP2020-B</option>
        <option value="SNA2020">SNA2020</option>
        <option value="Class_A">Class_A</option>
        <option value="Class_B">Class_B</option>
        <option value="Class_C">Class_C</option>
    </select>
    <br>
    <br>
    <input type="radio" id="first year" name="year" value="first year"> First Year
    <input type="radio" id="second year" name="year" value="second year"> Second Year
    <br>
    <br>
    <input type="text" name="student_id" placeholder="student_id..." class="form-control">
    <br>
    <br>
    <select name="province" id="province">
        <option value="Phnom Penh">Phnom Penh</option>
        <option value="Banteay Meanchey">Banteay Meanchey</option>
        <option value="Battambang">Battambang</option>
        <option value="Kampong Cham">Kampong Cham</option>
        <option value="Kampong Chhnang">Kampong Chhnang</option>
        <option value="Kampong Speu">Kampong Speu</option>
        <option value="Kandal">Kandal</option>
        <option value="Kep">Kep</option>
        <option value="Koh Kong">Koh Kong</option>
        <option value="Kratie">Kratie</option>
        <option value="Mondulkiri">Mondulkiri</option>
        <option value="Oddor Meanchey">Oddor Meanchey</option>
        <option value="Pailin">Pailin</option>
        <option value="Prey Veng">Prey Veng</option>
        <option value="Rattanakiri">Rattanakiri</option>
        <option value="Siem Reap">Siem Reap</option>
        <option value="Sihanouk ville">Sihanouk ville</option>
        <option value="Stung Treng">Stung Treng</option>
        <option value="Svay Rieng">Svay Rieng</option>
        <option value="Takeo">Takeo</option>
        <option value="Kampong Thom">Kampong Thom</option>
        <option value="Preah Vihear">Preah Vihear</option>
        <option value="Tbong Khmum">Tbong Khmum</option>
    </select>
    <br>
    <br>
    <input type="radio" id="follow up" name="status" value="follow up"> Follow Up
    <input type="radio" id="out of follow up" name="status" value="out of follow up"> Out Of Follow Up
    <br>
    <br>
    <form action="#">
        <label for="img">Select image:</label>
        <input type="file" id="img" name="img">
        <br>
        <input type="submit">
    </form>
    <br>
    <br>
    <button type="submit">Add</button>
</form>