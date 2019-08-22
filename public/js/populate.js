function populate (s1, s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if (s1.value == ""){
        var optionArray = ["Choose a Zone First To Select a LGA|Choose a Zone First To Select a LGA"];
    }else if (s1.value == "None"){
        var optionArray = ["Not an NCCF Member|Not an NCCF Member"];
    }else if (s1.value == "Hossanah Zone"){
        var optionArray = ["Kibiya|Kibiya", "Rano|Rano", "Bunkure|Bunkure"];
    }else if (s1.value == "Peaceful Zone"){
        var optionArray = ["Tudan wadan|Tudan Wadan", "Doguma|Doguma"];
    }else if (s1.value == "Gracious Zone"){
        var optionArray = ["Garko|Garko", "Gaariali|Gaariali", "Warawa tanagar|Warawa Tanagar"];
    }else if (s1.value == "Dominion Zone"){
        var optionArray = ["Dawakin kudu|Dawakin Kudu", "Dawakiji|Dawakiji"];
    }else if (s1.value == "Emmanuel Zone"){
        var optionArray = ["Bebeji g. malam|Bebeji G. Malam", "Kura|Kura"];
    }else if (s1.value == "Shiloh Zone"){
        var optionArray = ["Albasu|Albasu", "Samalia|Samalia", "Takai|Takai"];
    }else if (s1.value == "Kingly Royal Zone"){
        var optionArray = ["Dambata|Dambata", "Makoda|Makoda", "Kore-fagwalawa|Kore-Fagwalawa"];
    }else if (s1.value == "Upper Room Zone"){
        var optionArray = ["Kabo|Kabo", "Tofa|Tofa", "Rimin-gado|Rimin-Gado"];
    }else if (s1.value == "Exploit Zone"){
        var optionArray = ["Agingi|Agingi", "Gaya|Gaya", "Polac|Polac", "Wudil|Wudil"];
    }else if (s1.value == "Fruitful Zone"){
        var optionArray = ["Bichi|Bichi", "Fce bichi|FCE Bichi", "Kunchi|Kunchi", "Tsanyawa|Tsanyawa"];
    }else if (s1.value == "Glorious Zone"){
        var optionArray = ["Gabazawa|Gabazawa", "Gezaawa|Gezaawa", "Minjibir|Minjibir"];
    }else if (s1.value == "Goshen Zone"){
        var optionArray = ["Shanono|Shanono", "Bagwai|Bagwai", "Gwarzo|Gwarzo"];
    }else if (s1.value == "Peniel Zone"){
        var optionArray = ["Karaye|Karaye", "Madobi|Madobi", "Kiru|Kiru", "Rogo|Rogo"];
    }else if (s1.value == "Excellent Zone"){
        var optionArray = ["Air force base|Air Force Base", "Bukavo barracks|Bukavo Barracks", "Ungogo|Ungogo"];
    }else if (s1.value == "New Jerusalem Zone"){
        var optionArray = ["Nassarawa|Nassarawa", "Fagge|Fagge", "Dala|Dala", "Tarauni|Tarauni", "Gwale|Gwale", "KMC|KMC"];
    }
    for (var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
}