if (!$this->ketnoi)
        {
            $this->ketnoi = mysqli_connect('localhost', 'root', '', 'chanlemomo') or die ('Vui lòng kết nối đến DATABASE');
            mysqli_query($this->ketnoi, "set names 'utf8'");
        }
    }