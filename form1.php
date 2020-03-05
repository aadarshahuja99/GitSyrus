<?php
session_start();
include('connection.php');
error_reporting(0);
?>


<!DOCTYPE html>
<html>
  <head>

<!-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {     
  var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['gu'],        
          transliterationEnabled: true
        };  
     
var control = new google.elements.transliteration.TransliterationControl(options);  
var ids = [ "first_name", "last_name" ];  
  control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(onLoad);
    </script> -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
    <title>APPLICANT DETAILS</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 55px;
      font-size: 55px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #a37547; 
      }
      .banner {
      position: relative;
      height: 230px;
    
  background: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEhUQEBIVFRUVFRUVFhYWFRUXFRYXFRUWGBUXFRcaHSggGBolGxUVITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGy0jICYtLS0rLi0tLS0tLS0tLzctLy0vLS0tLS0tLS8tLSstLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALUBFwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAQIEBQYDB//EAEAQAAEDAgIHBQYFAwMDBQAAAAEAAgMEEQUhBhIxQVGBkRMiMmFxM0JSobHBBxRigtFy4fAjQ/E0U7IVkqLC0v/EABoBAQACAwEAAAAAAAAAAAAAAAADBAECBQb/xAAsEQACAgEDAgUEAgMBAAAAAAAAAQIDEQQhMRJBBRMyYXEiUZHBQrFDgfAz/9oADAMBAAIRAxEAPwD0TDJXvia+Roa5wuQN19ilWVZg1LUxktmkEjALNPvc1aoBEWTkWQHJ8IO5U2IVrYJGskya/wALt1+B81fKo0vwwVFM+P3gNdh4ObmPllzQE2lzF1NaFk/w4xB01MWv8UTtXkcx0zC2ACAbZMckqZ2MF3ua31ICiisY7wODvQgrPS8ZwYyuCSSotdh0E7dWaNrx+oA29DuThIurXLBky0+hjo7uoKmSA/A7vxHkTcLn/wCsYhS5VlMZGj/dgOsPUs2hbAOTgUBSYRpRS1Hs5Bfe091w9QVeMlB81UYtozR1Helhbr/G3uyD9wz6qmOj9fT50lT2rf8At1GZ9GyDYgNlYFIWLIR6WvhOrXU8kB2a1teM/uC0WH4rDMNaKRrh5G6Al2RZdA66C4DcgOU7tVvmV5xpJI6qq2Use51jwucz0C2OkmJiGJ0jjnsA4k7As/8Ah7hxJfWSbXEtaTxOb3fZAa2KFsbGxsyDQAOQWfkb+ZrGx7Y4O+/gXnwDkLlW2M1zYYnyu2NaT68AuWidAY4dd/tJSZHnzdu5Cw5IC5siyciyAbZFk5CAbZFk6yRANskT7JEA0hJZPsiyAZZCelQDLJUWRZACEqAgFA3qnx3ERDFJK7c02+gHVWtS6wt1WE0gJrKqOhYe6CHSkbgBc/L5lAWf4Z0TmUpleLGZ5eB+kZA88yr7GcS7GMuFi45NB4/2UgNaxoa0WDRYDgAMh9FjccrO0lNj3Wd0eu8/ZWtJT5tmHx3INRb0Q9yDNI57i57i5x3n7cAkYSDdpsfLJCF6LpSWDj5fJZUuNStydZ489vUK4pMZhdkXah4OyHXYsrZFlUt0VVm+MP2J69TOHubxr/8AP7ro16w9NVyR+BxHltHRW1LpBulb+5v8H+VzrfD7I+ncuw1kJerY0ocnXUGlrI5PA4Hy39DmpIcqMouLw1gtJp8HV8bXCzgCOBFx0VBW6GUr3dpDrU8nxxOLc/Nuwq+a5dA5amTLCDFafZqVbB+yW30cUybSepGQoajW82m3UBa8OS66A8+Zo/XVsgfVjsYxsZlrchu9StnDTsiY2OMANaAABuAUwlcZQgMPplUF89LS7pJWF3m1rhcfVbqEZLA6fU74pKeuaCRBINfyaSM/qOYW3w2tZKxskbgWuAIKAlITrhLqoBlklk6yEA2yE6ySyAaiyWyLIBEJbIQA1qRc62oEbNYm2z6oQD0IQgBOblmdyQLnVPsLdUBU49iIhifK7cMvXcFW6AYa5sbquX2k51hxDL3HU58gqzGb1tYyibfUYdaU+m3oPmVuyA1oa0AACwA2ADYAgKzHa3s4zbxOybz2nkFjgFYY1V9pKbeFvdH3P+cFBXodFT5Ve/L3OPqrOufsgshCFcK4IXeajkYA57HAOFwSMiuCwpJ7oy01yCEIWTABWNLjMzMidYcHZ/Paq5C0nXCaxJZNozlHhmppMfidk+7D1b1/lWX5gW1m94cQbrCp8MzmG7HFp4g268Vz7fDYP0PBbhrZL1bm7jqAdhXUPWSgxx2yRof5jJ38FWlLiUbsmvsfhfl0K51uktr5W3sXIaiE+GXWsgqIJyPECPPaF3ZKDsKrE4k9O17Sx4Ba4EEEXBB23WRl0VqqZxfh04a05mCS5Zf9Lt3RbMFOBQGLZphNAdXEKZ8O7tG9+I8xsWlw7GYJxrRSNcPIj58FOfGCLEAg7QQCOhWcxHQejkOvEHU8m0PhOpnx1RkgNM2TmlyWJ/LYvS+FzKyMbj3JrfRxUmh01gLuzqGvp5PhlaW9HbCgNbZIuEFW1wu1wI4g3CkB4QCWSJ9uCQhANSgITaiUMY552AEoDDfiPi3hpmbT3jbcAch8vkhcdEqb85Wy1cguxl7A5i7hqtHIXPNCA31kqUIAQAMhfgqHSPExBE+Q7RsHFx2f55K6qn2y4bVgsSaa6tZSj2UfelI+Y6WHMoC20AwoxQmok9pP3iTt1do67VZ4/W9nGbeJ3dH3PRWrrAZDICwG7JYnGqztJSQe627W8tp+XyVvRUebZvwtyvqbeiHuyBZCEL0RxwWhwbDGRs/N1WTBmxh2vPu5b/Ic9iMEwhjWfmqrKNubWn3zuy4X2DepuJRR1xDoagBwGULxq242/wAKoXX9T6E9u7/Rarqwup89l+xuM1jpqFsrstaU2HAAuAHyWTWrxildFh8UbxZwkzG3a55+6qtHMJFTIWuJDWtuSLXufCMx69FnTThXVKXbLMXRlOaXfCKpCun6Ny5hj43uG1geC8DzHFUz2kEgixBsQdoPA8FahbCfpZDKEo8oahCFIaCpEIQCoSIQEqmxCWPwPNuBzb0Ks6fHGn2jNU/Ez7tVEhV7dLVZ6kTV3zhwzZQ1wIux4eBu2OHLarBj+OS8+BO0KxpcbnZlfXHB2fQ7Vz7PDH/jefktw1q4kjaNcnByoqXSGJ2T7sPnmOo2K2ilDhdpDhxBuFzrKZ1v6lguQthP0skKNXYfDM3UmjY9vBzQV11k4OUZuZSbQvszrUM8lOfgJL4j+12YC5/+q4jTf9VTdqwf7sHey4lm0LYApUBSYTpNTT+zkF97Tdrh+05q5ZLdV2JaO0lRnLENbc9vdePRzc1XDAKyH/panXb8E41uj25/JAaQyBZHT7GNSHsWHvyWaANurv67Oakyx4s7uiOnZ+rXc75Lrg2iTWSfmaqQzzbRcWY0+Q3oCZodhP5alYxws93ff/U7dyFh1QrtCAjpb2F07Ib1GqZegQFHpRivYQuf7xyaP1HZyG1M0DwkwwGWT2kx1yTtDfdH35qheDiFe2MexhOs7gbbeps30uvQJXWyCAqdIa7UjIHidkPueiyAU3F6vtZCdze637nmVDXotHT5Ve/L5OPqbeufwCAbZoKRW/krk7EcVlnDRIcm7ABYetuKgoQtYwjFYiZcm3lmpxVxOHQEkkkjMm596yZIXUtE0NykqHXJ2ENt/FuqgYP2tQ6Olc4mIODiDua3bY8Ds5q5xasp6pz6d7xEY3f6bz4TYWcDz+y5so9MlBrKy5PH27FxPqXV3wkv2ZzBdbt4tTbri1uF+98laY3RiWvMTPeLb+XdBcegupFGymoryulbNLYhjWbB5/3KTAi5rKivfm6zg3+o7SPK5A5Ley36nZH7YXu2/wBGsYbKD++X7IbieAU7ZS1tQyPZZjruN99zfu/NUmJYfJA/UkGdrgjY4cQo0jy4lzjcm5J4krR6TginpWOzkDT62sBbrZSRdlUoxlLOTRqM1JpYwV+F4S2SKWZ7ixsYyIAN3bTl0HNVa02PDsYIaNpzdZ0lvM/z/wCKqMaw008nZ62tcBwNrZHcei3ot6pNt85x8IxZXhLHbn5ZAQhCtEAiEqEAiEqEAi6QTuYbscWniDb/AJTEiw1lYZlNrgu6TSKRuUjQ8cR3XfwVc0mMQSbHap4Oy/ssWhU7dBVPjb4LFeqnHblHogKUOWEpMQlj8DyBw2joVdUmko2Sst+pv8LnW+H2x3juXK9ZCXOxpGuT2vUCnrI5Bdjgfr0UhjlRlFxeGsFpNNZRKunBManhYMghKkQGCj0/prd/Xad4LDcdFAq8fqq68NFE8B2RkOQA357B9VuX08Ts3RsJ4loK6tIAsAAOAFggKzRrBGUcOpfWe7N7uJ4DgAuekWICKIkmxcQ0erslaSPWI/E5r/yus33Xgn0/5WYvDTMNZRHCVQ8LrmzRteDmQL+u9TLL1UZKSTRwWsPDEQhC2MAhCVAScPxCSBxdEQCRY3F8vtmoqWyFqopPJnLxgWNhJDWi5JAHqdn1C2NdXRUrY6Nw1mdmRLbb3htHO55rHxyFpDmkgjMEbQeIT6mofI4vedZx2n0AH2UF1Dtks8L+ySuzoTxyXtPT4dG4SmcyAZtj1TckZgOy/hdcLkNZV9tILMiGtbc0Dwjrc8lmFLpcRkjY+NhAbILOyz4ZHdktJ6eWG025cb9l3N43LKysLnY61lZ29T2m50jQ3+kOAb8vqrLSyF8lYI2DWcWsAHUqmw1pM0YAvd7dnqtbpBiEdO97o7OnkAF/+20C3Xao7H5dsYwW+Hg2guqEnL77lTikcFNF+XDWyTOze8i+p/TwP/JWfSvcSSSbk5knaSeKWKMucGNFy4gAeZ2K1VDy47vfuyCcup7L4HOgeGh5aQ0mwdbIkbrrmtfjeIR0wjpmRskcwAkvFwCd9hvOZ5qNNFDVU0lQIxFJFt1fC62ZUENVJpSlHZvn+iWVCy0nujMoTmsJNgCfQEn5IewjJwIPAgg9CrnUuMkGHjI1CELJgEiVCARKhCAWN5adZpII2EbVrcCxUTXafG21xxB2FZEBJgFWWYiwDY9gafmQub4jBeX1d8ouaOT6+k9NYF0TWpy4h1AQlCEBTPEjfE244t+7do+aSKZrvCb+W/mFZrhUUbH5kZ8RkeqAjEqLX0TJo3RSC7XAtI9eHmpL6SRvgcHDg7I8nD7hcxMAbPBYf1fY7EB5JiGjldhzi6IGaHi0EkD9TRmD5jJLQaURuyd3T57Oq9gCpcZ0Uoqq5liAcffZ3X8yNvNWadXZVsnt9iCzTwnyZeGqa7YQu6rK78PayAl9FMJG7dR/df8A/l3yVY3HJad3Z1kL43cSNvpx5ErqVeIVy2lsUbNJOO8dzTIUajr45ReN4d9eikq8mmsoqtNPDBCLIWTAIQhACEIR7g0TtIom3fBTNZKRbWysONrf2Wfkkc4lziSSbknaSd6RIoq6YV+lG87JS5BXuiMTO1dNIRaJpduvexzHIFUaLLNsOuDj9xCXTLJ1rKkyvdI7a4k9dg+gWhxJhgpIqYe0mIc/jmQbf+I5FZ2mlDXteW6waQbbL2U+txbtals7hYNcyzdtmtIPPf1UVtcnKKS+lb/jhEkJJJt8v/mW9fVChjbBCB2rm6z3kXP+bbeibhFeawmnqQHXaS14ADmkLhpXRSPl7eMF8cjWkFovazbWNuvNd9HaQ0zX1k41bNIY05OJPl55BU2oeT1Z+t/nJP8AV5mP4r8YKajwl8nbAEAwg6199iQbH9pVetFgshFNVyna6w5m5PzcpOi2FsaWSzi7pLiJhG7VJc8j0BVh6lw63LthL5xuRKrq6VHuZRCn1cBkqXsibtkcGtGQyNuQXPE6EwSGMva4gC5bfK+433/yrUbE8Lu1nBA4Nb9iIhCFuaiSOsCVx0CpTUVxm92IXPqbtaPqVFxyo1WEcVvPw7wnsKQOcLPlPaO9D4ByH1XI8St3Va+To6KvZyNLZCcUi5RfEQguQgMngcsn5ydoe58Yve+y9xa3pmFp1m9B7GFxt3i/vHjlktIEAJHMBFiLpyEBCfh4Gcbi3y2t6HZyVbVYiIXBlQNTWya8eBx4X3HyKv1GxLD4543RSt1mO2jeOBB3EcUAyAg5hdKrD4pmlk0bJGna17Q4dCstohLJDUTYdK7W7PvxOO0sNj/9gtqxqA8/xn8Lad/fpJH079wuXM+txyKy9bQYtQ+3i7eMf7jO9l52Fx+4L2qyY9SV2zreYvBpOuM+UeK0WksD8iSx3B2WfrsVxHMDsN1q8e0PoKq5khDXn34+4/nbJ3MFYiv/AA9rYCXUU3aN+B3dd6fCT0XQq8Sa/wDRFSeiX8WT7pVk4tI5InmKqjLHNyOWYPmP4V7RYrFKO48Hy3j1C6VWors9LKU6Zw5ROQEB4KVTEQIQhACEIQAhCEBMosUnhyjkIHw5FvQpldiE01u1eXW2DIAchkoyFp5cE+rCybOcsYzsarR3sPysgmcA0Sa7hvIbawI87IwKtfUVbpnbGRv1G/CMgAPPasorDBsWdTOLmtDtYWN/LMWKq2aVtTkt2yeF+8U+EW7niijLjY1MoJ49m0n6/UrNOcSbk3JzJ3knab70+qqHyPMjzdzjcn+OC5qamroWZcsiss6nhcAkSqNXzarCVNKSiss0im3hHHDqP83VMh93Wu7ya3N3yy5r2BoAFgLAZAcFivw0wy0b6lwzeS1v9IPeI5/RbYry9ljsm5Pud2EOiKiIUwpxK5PK0NhkjkKDiNW2Npe42At8zZKgJscYaLNAAG4CwTghAQCoQhACSV1hbmnNVRj+KNgifO73RkOJOTR1sgKalIkxlzmZiKnDH/1E3t/8h0W1CymgGGujgNRL7Wod2juIb7o57eav62r1Blm4mzR5n/PkgJUkwGW08FGl7Q7AOZKfBFqjid54rogKx87m+0aWj4hm3ruXaORrhcEEHeM1OsoU+GRuOsLsd8Tcjz3FAQcRwiCdurNEyQcHNF+R2hYfGPwxjJ16OV0TtzH95v7XjvDndb10c8e4SN8u6/psKWGvY46pNnfC4WPQoDxutjxOg9vEXxj3x3m/+9uzmFLoNKIX5OOoeDvsd69g1Bu39D6hZnHNBqKouXRdm4+/F3Tzb4SrdWttr75XuV56aufsUMc7XC4IIXS6oq7QCvpiXUkombwHcfzYTY8iq2DSSWJ3Z1UTmuG3Ig82n7Lo1eIVy2lsU7NHOPG5r7IVfQ4vDL4Hgnhv6FTw4FXoyjJZTyVHFrZioQhbGAQlSIAQhCAEIQgBVlU100rIWbXOA5k/4VYTSarSVP8Aw5w7tJ31LhkzJv8AU7+B9Vz/ABG3ph0LuXNHXmfU+x6Bh9I2GJkTdjGho5LsU4pjlwzqDSuMhXVxUSpkDQSdgzPJAYzTqvN2QN2+N3p7v3SqvwhhrKuSY+HO3psHyQgPSUJUIAQhK0IBk77C3FYXGb1tbHRN9nH/AKkvDIA2PnYgfuWk0hxMQxPlduGQ4k+EdVXaAYa5kLqmX2tQdck7dUkkddvRAag2AsMgBl5KupbyzF/ux91vm4+I8hYcyumKVJYw6ubnHVaOLjkP55KRQUwjY1g3DM8Sdp6oCQlSJUAIQhAC41NLHILPaHDzGz04cl2QgKp+GSMzhkNvgku4cjtC4mvdHlOxzP1DvM6jZzV2gi+1AV7JGPFwQfMKJiODwVFmzxMla3Ma7QSPRSajBoydaO8TuLMhzbsKjO/NReJolbxZk+3m07eSAymM/hjTSXfSvdA/cPEy/pe7eRWVrMIxaizeztox77CXiw5aw5het0uIxPyDrHe091w9Qc1Lut4WTg8xeDWUIy5R41QaTxOyfdh89l/VXkVQ1wuCCtbjWiNDVZywgP8AjZ3H8yPFzBWKxH8PKuC76GbXHwOOq7590/JdCrxKS2mslOzRJ+lk26VZc4zUU7uzq4XsPm0j65HkriixaKQXa4em/oulVqarPSylOicOUT0JA8FOU5ECEJHGyArcYmyDBtK9Q0Wwz8vTRxnxEaz/AOp2Z6bOS890UofzVaCc2Rd88O6e6OZt0XrC85q7fMtb/wBHZ09fRBIQphTimOVYnOchWS08xLsqcsae9IdQenvH7c1qpivM8clNZiLYGm7IzqnhcZvPXLkgNRoDhnZwB7hm7PqhaWjgDGBo3BCAchCEAJs7rC3H6J7QqbSHExDE+Y+6MhxO4dUBmcbvW1sVE32bP9SW3luPI2/ct5YNAAyAAAHADILLfh9hjmROqpc5Kg61zt1b5dTmr3FanUYSM3GzWji5xsAgONOO1nLvdi7o83kd48gbc1bBRsPpuzjazftJ4km5PVSggBCEIAQhKgESoQgBCEIBksjWgucQANpOxOa4EXBuDsIWf0jeZXx0jPeOs/yaNgPzPJX8bA0Bo2AAD0GxAR6zD4pfGwHgdjh6EZhV7sNni9jJrt+CXM8nj7hXSEBRDFg06s7HRHi7wH0cMlYxyAi4II8t6lvYCLEAg7jmqqbAmA60DnQu/Tmzmw5dLIDtV0kUrdSVjXtO5wBHzWRxL8OaZx1qZzoXfD4o+QObeRWhdNUw+1i7RvxxbebDn0upFHiMUvgeCd42EeoKA8yrcFxCkzcwyMHvNu4c946LjS4005Oy+i9fBVXimjNHU3MkYDj77O67qNvNWqtZbX3yvcrz00J9jCCtZa+sOoVdX4oCNSPNxyyF9vC20+i1x/DGmJyqJbcNVhPX+y0OA6JUlKQ6Nhc/435uHpuHJT2eIzlHCWCOGjjF5bycdA8CdSwXkFpZbOcN7QB3W8rnqtIUoSFc4uDSubyuhXGQoCo0ixEQQSSn3W5ebjk0dVk/wxw4uLqp+ZcTYn1zPVcPxOri98VGza4h7h65NH1K3OjdAIIGRjc0A+ts0BbAISoQHFCEIBJTZvqsHpeTNU01G42ZI7WdbacwLdL9UIQG81Q0AAWAFgNwA2BVY79UGu2Rs1wP1OJbfkL9UIQFuEqEIAQhCAVCEIAQEIQAlQhAZvRcdrJPUP8AFr6g4AX2DkAtIhCAEIQgBCEIBVCrsJhmzewa25wyePRwzSIQFDis0tFqkSGVjjbVeO8P3jb0VzQ1Ou0Ota/NCEBOjK7NSoQCpChCAY5cJUIQHmE0Ykxoh2erq25MuvUqfYhCA6oQhAf/2Q==);
  
  background-size: auto;

      
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a37547;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a37547;
      color: #a37547;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #a37547;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #a37547;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      .button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #6b4724;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .button:hover {
      box-shadow: 0 0 18px 0 #3d2914;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
    option {
  margin: 0.5em;
}
      }
    </style>
  
  
  </head>
  <body>
    <div class="testbox">
    <form action="" method="GET">
      <div class="banner">
        <h1><strong>REGISTRATION DETAILS</strong></h1>
      </div>
       <div class="item">
        <p><strong>NAME<strong></p>
        <input type="text" name="name" id="first_name" value="<?php echo $b; ?>" />
      </div>
    <div class="item">
        <p><strong>Email</strong></p>
        <input type="text" id="last_name" name="email"/>
      </div>
    <div class="item">
        <p><strong>Phone</strong></p>
        <input type="text" name="phone_number"/>
      </div>
<div class="item">
        <p><strong>Year of Graduation</strong></p>
        <input type="text" name="graduation_year"/>
      </div>
        <div class="btn-block">
          <input type="submit" name="submit" class="button">
        </div>
    </form>
    </div>

<?php




if($_GET['submit']){

$a=$_GET['name'];
$b=$_GET['email'];
$c=$_GET['phone_number'];
$d=$_GET['graduation_year'];

if($a!="" && $b!="" && $c!="" && $d!=""){

$query="INSERT INTO Student (name,email,phone_number,graduation_year)
VALUES ('$a','$b','$c','$d') ";

$data=mysqli_query($conn,$query);

}}

?>








  </body>
    
</html>
