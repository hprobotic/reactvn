]�W<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:50:"SELECT * FROM reactvn_posts WHERE ID = 528 LIMIT 1";s:11:"last_result";a:1:{i:0;O:8:"stdClass":23:{s:2:"ID";s:3:"528";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-08-03 02:30:44";s:13:"post_date_gmt";s:19:"2016-08-03 02:30:44";s:12:"post_content";s:19248:"<h2><b>1 Giới thiệu</b></h2>

Tôi nhận được thư từ của nhiều bạn hỏi về việc nên học gì và như thế nào để có thể tìm được việc làm và làm được việc trong ngành an toàn thông tin (information security). Tôi nghĩ việc đầu tiên bạn cần phải làm là in toàn bộ bài viết "<a href="http://www.hvaonline.net/hvaonline/posts/list/621.hva">Làm thế nào để trở thành white hat hacker</a>" ra giấy, nhưng đừng đọc, mà hãy để chúng trong toilet khi nào cần thì xài dần.

Quay trở lại câu hỏi. An toàn thông tin là một ngành rộng lớn với rất nhiều lĩnh vực. Những gì tôi biết và làm được chỉ gói gọn trong một hai lĩnh vực. Có rất nhiều mảng kiến thức cơ bản mà tôi không nắm vững và cũng có nhiều kỹ năng mà tôi không thạo. Hack tài khoản Yahoo! Mail là một trong số đó. Tôi cũng không biết cách tìm địa chỉ IP của bạn chat :-(.

Xét theo <a href="http://www.procul.org/blog/2005/09/01/nnm-m%E1%BB%A9c-ngu-d%E1%BB%91t/">năm mức ngu dốt</a> thì tôi nằm ở mức "1OI - thiếu kiến thức" ở hầu hết các lĩnh vực trong an toàn thông tin. Cũng có lĩnh vực tôi nằm ở mức "2OI - thiếu nhận thức". Nhiều lần đọc sách vở hoặc nói chuyện với đồng nghiệp, tôi hay nhận ra rằng có nhiều thứ tôi không biết là tôi không biết. Theo ý của anh Ngô Quang Hưng thì đây là chuyện bình thường:

<blockquote class="tr_bq">Dân máy tính thường phải đọc/học rất nhiều để theo kịp sự phát triển với tốc độ ánh sáng của ngành mình. Trong quá trình này, với mỗi vấn đề X của ngành, ta sẽ chuyển dần dần từ 3OI xuống 1OI. Sau đó, nếu X là cái mà ta thật sự thích hoặc cần cho công việc thì sẽ chuyển nó lên 0OI.</blockquote>

<blockquote class="tr_bq">Rất nhiều sinh viên và nghiên cứu sinh KHMT ở mức 3OI khi mới bắt đầu đi học. Sau đó họ tìm hiểu về quá trình nghiên cứu, quá trình tìm các vấn đề và hướng nghiên cứu mới, quá trính cập nhật kiến thức về ngành của mình, và chuyển dần các thứ lên 2OI. Để có một quá trình hiệu quả từ 3OI lên 2OI không dễ chút nào. Ví dụ đơn giản: các journals, conference nào trong ngành mình là có giá trị, làm thế nào để tìm đọc các bài trong chúng, phương pháp lọc bài đọc thế nào, vân vân.</blockquote>

Tôi thấy anh Hưng nói có lý, nên mục tiêu chính của bài viết này là cung cấp một quá trình hiệu quả để bớt ngu về an toàn thông tin.

<b>2 Làm an toàn thông tin là làm gì?</b>

Tôi muốn viết phần này vì nhiều người tưởng tôi làm bảo vệ khi tôi nói tôi làm security. Ngoài ra có lẽ là do thị trường việc làm an toàn thông tin ở Việt Nam không phong phú nên hầu hết đều nghĩ rằng làm an toàn thông tin nghĩa là đảm bảo an toàn hệ thống mạng (network/system security), trong khi thực tế đây chỉ là một trong số rất nhiều công việc trong ngành.

Trong bốn phần nhỏ tiếp theo, tôi sẽ giới thiệu bốn nhóm công việc chính trong ngành. Đối với mỗi nhóm công việc, tôi sẽ bàn một chút về triển vọng nghề nghiệp ở Việt Nam và Mỹ, hai nơi mà tôi có dịp được quan sát. Nếu bạn không biết bạn thích làm gì thì cứ chọn một công việc rồi làm thử. Các công việc này đều có liên quan nhau, nên kiến thức mà bạn học được trong quá trình thử vẫn hữu ích cho những nghề khác.

<i>2.1 An toàn sản phẩm (product security)</i>

Công việc chính của nhóm này là làm việc với các đội phát triển sản phẩm để đảm bảo sản phẩm làm ra an toàn cho người dùng và an toàn cho hệ thống của công ty, cụ thể là:

<ul>
    <li>Kiểm định mã nguồn và thiết kế của sản phẩm</li>
    <li>Phát triển các giải pháp kỹ thuật và quy trình phát triển phần mềm an toàn để phát hiện và ngăn chặn những kỹ thuật tấn công đã biết</li>
    <li>Đào tạo nhân lực để nâng cao nhận thức về an toàn thông tin cũng như kỹ năng viết mã an toàn</li>
    <li>Nghiên cứu các hướng tấn công mới có thể ảnh hưởng hệ thống sản phẩm và dịch vụ của công ty</li>
</ul>

<div>Tóm gọn lại thì nhóm này chuyên <a href="http://vnhacker.blogspot.com/2011/11/tim-lo-lay-tien.html">tìm lỗ hổng</a> và kỹ thuật tấn công mới. Đây là công việc của tôi và tôi thấy đây là công việc thú vị nhất trong ngành :-).</div>

<div></div>

<div>Ở Mỹ thì thông thường thì chỉ có các hãng có phần mềm và dịch vụ lớn như Facebook, Google, Microsoft, Oracle, v.v. hay các tập đoàn tài chính ngân hàng lớn mới có đội ngũ tại chỗ để đảm nhiệm công việc này. Các công ty nhỏ thường chỉ thuê dịch vụ của các công ty tư vấn. IBM và Big Four đều có cung cấp dịch vụ tư vấn này. Dẫu vậy nếu được chọn lựa thì tôi sẽ chọn làm cho các công ty chuyên sâu như Matasano, iSec, Leviathan, Gotham, IOActive, Immunity, v.v.</div>

<div></div>

<div>Ở Việt Nam thì thị trường việc làm cho người làm an toàn sản phẩm có vẻ ảm đạm hơn. Cho đến nay tôi biết chỉ có một vài công ty ở Việt Nam là có nhân viên chuyên trách lĩnh vực này. Các công ty khác (nếu có quan tâm đến an toàn thông tin) thì hầu như chỉ tập trung vào an toàn vận hành. Các công ty tư vấn an toàn thông tin ở Việt Nam cũng không tư vấn an toàn sản phẩm, mà chỉ tập trung tư vấn chung chung về các quy trình và tiêu chuẩn an toàn thông tin.</div>

<div></div>

<i>2.2 An toàn vận hành (operations security)</i>

Công việc chính của nhóm này là đảm bảo sự an toàn cho toàn bộ hệ thống thông tin của doanh nghiệp, với ba nhiệm vụ chính:

<ul>
    <li>Ngăn chặn: đưa ra các chính sách, quy định, hướng dẫn về an toàn vận hành; kiện toàn toàn bộ hệ thống thông tin, từ các vành đai cho đến máy tính của người dùng cuối; cấp và thu hồi quyền truy cập hệ thống; quét tìm lỗ hổng trong hệ thống, theo dõi thông tin lỗ hổng mới và làm việc với các bên liên quan để vá lỗi, v.v.</li>
    <li>Theo dõi và phát hiệ: <a href="http://vnhacker.blogspot.com/2009/12/giam-sat-ninh-mang-hay-la-lam-nao-e.html">giám sát an ninh mạng</a>.</li>
    <li>Xử lý: phản hồi (incident response) và điều tra số (digital forensics) khi xảy ra sự cố an toàn thông tin, từ tài khoản của nhân viên bị đánh cắp, rò rỉ thông tin sản phẩm mới cho đến tấn công từ chối dịch vụ.</li>
</ul>

Đây là công việc khó nhất, nhưng lại ít <a href="http://vnhacker.blogspot.com/2007/01/phn-thng-no-dnh-cho-ngi-lm-bo-mt.html">phần thưởng</a> nhất của ngành an toàn thông tin.

Tương tự như trên, chỉ có các hãng lớn của Mỹ mới có đội ngũ tại chỗ để phụ trách toàn bộ khối lượng công việc đồ sộ này, nhất là mảng xử lý và điều tra. Đa số các công ty chỉ tập trung vào ngăn chặn và sử dụng dịch vụ của bên thứ ba cho hai mảng còn lại. Các hãng như Mandiant, Netwitness hay HBGary cung cấp dịch vụ điều tra các vụ xâm nhập và có rất nhiều hãng khác cung cấp dịch vụ giám sát an ninh mạng.

Ở Việt Nam thì thị trường việc làm cho người làm an toàn vận hành tương đối phong phú hơn so với an toàn sản phẩm. Các công ty và tổ chức tài chính lớn đều có một vài vị trí chuyên trách về an toàn vận hành. Đa số người làm về an toàn thông tin ở Việt Nam mà tôi biết là làm trong lĩnh vực này. Dẫu vậy hầu như chưa có ai và công ty tư vấn nào làm về phản hồi và điều tra sự cố.

<i>2.3 Phát triển công cụ (applied security)</i>

Công việc chính của nhóm này là phát triển và cung cấp các công cụ, dịch vụ và thư viện phần mềm có liên quan đến an toàn thông tin cho các nhóm phát triển sản phẩm sử dụng lại.

Nhóm này bao gồm các kỹ sư nhiều năm kinh nghiệm và có kiến thức vững chắc về an toàn thông tin, viết mã an toàn và mật mã học. Họ phát triển các thư viện và dịch vụ dùng chung như phân tích mã tĩnh - phân tích mã động (static - dynamic code analysis), hộp cát (sandboxing), xác thực (authentication), kiểm soát truy cập (authorization), mã hóa (encryption) và quản lý khóa (key management), v.v.

Đây là dạng công việc dành cho những ai đang viết phần mềm chuyên nghiệp và muốn chuyển qua làm về an toàn thông tin. Đây cũng là công việc của những người thích làm an toàn sản phẩm nhưng muốn tập trung vào việc xây dựng sản phẩm hơn là tìm lỗ hổng.

Rõ ràng loại công việc này chỉ xuất hiện ở các công ty phần mềm lớn. Ở các công ty phần mềm nhỏ hơn thì các kỹ sư phần mềm thường phải tự cáng đáng công việc này mà ít có sự hỗ trợ từ nguồn nào khác. Ở Việt Nam thì tôi không biết có ai làm dạng công việc này không.

<i>2.4 Tìm diệt mã độc và các nguy cơ khác (threat analysis)</i>

Ngoài an toàn sản phẩm ra thì đây là một lĩnh vực mà tôi muốn làm. Công việc chính của nhóm này là phân tích, truy tìm nguồn gốc và tiêu diệt tận gốc mã độc và các tấn công có chủ đích (targeted attack). Mã độc ở đây có thể là virút, sâu máy tính, hay mã khai thác các lỗ hổng đã biết hoặc chưa được biết đến mà phần mềm diệt virút thông thường chưa phát hiện được. Các loại mã độc này thường được sử dụng trong các tấn công có chủ đích vào <a href="http://googleblog.blogspot.com/2010/01/new-approach-to-china.html">doanh nghiệp</a>.

Tôi nghĩ rằng sau hàng loạt vụ tấn công vừa rồi thì chắc hẳn các công ty lớn với nhiều tài sản trí tuệ giá trị đều muốn có những chuyên gia trong lĩnh vực này trong đội ngũ của họ. Ngoài ra các công ty chuyên về điều tra và xử lý sự cố như Mandiant, HBGary hay Netwitness mà tôi đề cập ở trên đều đang ăn nên làm ra và lúc nào cũng cần người. Các công ty sản xuất phần mềm diệt virút dĩ nhiên cũng là một lựa chọn.

Ở Việt Nam thì tôi nghĩ hầu hết doanh nghiệp vẫn chưa thấy được nguy cơ đến từ các cuộc tấn công có chủ đích, thành ra họ sẽ không tuyển người chuyên trách vấn đề này. Tôi cũng không biết có công ty tư vấn nào ở Việt Nam chuyên về điều tra và xử lý sự cố hay không. Tôi nghĩ lựa chọn khả dĩ nhất cho những người thích mảng công việc này là các công ty phần mềm diệt virút.

Tuy nhiên cũng cần lưu ý rằng trong vài năm gần đây ở <a href="http://googleonlinesecurity.blogspot.com/2010/03/chilling-effects-of-malware.html">Việt Nam</a> còn xuất hiện những loại mã độc nhắm vào đông đảo người dùng máy tính bình thường. Vấn nạn này có lẽ sẽ còn kéo dài trong nhiều năm tới và lẽ đương nhiên "phe ta" lúc nào cũng cần thêm những chiến sĩ lành nghề như anh <a href="http://www.hvaonline.net/hvaonline/posts/list/38818.hva">TQN</a>. Thành ra dẫu triển vọng nghề nghiệp không sáng sủa cho lắm, nhưng tôi rất hi vọng sẽ ngày càng nhiều người tham gia vào việc phân tích các mã độc nhắm vào người dùng máy tính ở Việt Nam. Đối với tôi họ là những người hùng thầm lặng, chiến đấu đêm ngày với các "thế lực thù địch" để bảo vệ tất cả chúng ta.

<b>3 Học như thế nào?</b>

Đa số những bạn viết thư cho tôi đều đang học đại học ngành CNTT và tất cả đều than rằng chương trình học quá chán, không có những thứ mà các bạn muốn học. Tôi nghĩ đây là một ngộ nhận.

Hối tiếc lớn thứ nhì trong sự nghiệp học tập mấy chục năm của tôi là đã không học nghiêm túc khi còn là sinh viên (hối tiếc lớn nhất là tôi đã không nghỉ hẳn, nhưng đó là một câu chuyện dài khác). Tôi cũng đã nghĩ rằng chương trình học ở đại học là lạc hậu và không cần thiết. Bây giờ nhìn lại thì tôi thấy nội dung và cách dạy của từng môn học thì đúng là lạc hậu (chỉ có mấy môn triết học Mác-Lênin là bắt kịp <a href="http://www.ou.edu.vn/dtn/Pages/Moi-ban-tham-gia-cuoc-thi-Anh-sang-thoi-dai-2012.aspx">ánh sáng thời đại</a>), nhưng toàn bộ giáo trình đại học vẫn cung cấp được một cái sườn kiến thức rất cần thiết cho một kỹ sư an toàn thông tin.

Ở đại học người ta có cách tiếp cận top-down, nghĩa là dạy từ đầu đến cuối những kiến thức nằm trong chương trình. Điều này dễ dẫn đến tình trạng là người học phải học những kiến thức mà họ không thấy cần thiết. Nếu chương trình học cũ kỹ và không có nhiều thực hành, hoặc người dạy không chỉ ra được bức tranh toàn cảnh, vị trí hiện tại của người học và bước tiếp theo họ nên làm là gì thì người học sẽ dễ cảm thấy rằng họ đang phí thời gian học những kiến thức vô bổ.

Trong khi khi đi làm thì cách tiếp cận là bottom-up, nghĩa là lao vào làm, thấy thiếu kiến thức chỗ nào thì học để bù vào chỗ đó. Lúc này tôi hoàn toàn chủ động trong việc học và tôi cũng hiểu rõ tôi cần học cái gì và tại sao. Điều thú vị là mỗi khi truy ngược lại nguồn gốc của những kiến thức tôi cần phải có, tôi thường thấy chúng nằm trong chương trình đại học.

Ví dụ như tôi muốn luyện kỹ năng dịch ngược mã phần mềm (reverse code engineering - RCE) thì tôi thấy rằng tôi cần phải có kiến thức về tổ chức và cấu trúc máy tính. Hoặc nếu tôi muốn học về mật mã học thì tôi phải học lý thuyết tính toán, mà khởi nguồn là lý thuyết automata. Nhưng tại sao trước đó tôi cũng đi làm nhưng không thấy được những lỗ hổng kiến thức này? Tôi nghĩ là do tôi làm không đủ sâu. Ví dụ như nếu bạn suốt ngày chỉ lập trình PHP thì bạn sẽ không thể hiểu được tại sao phải nắm vững tổ chức và kiến trúc máy tính. Hoặc giả như công việc của bạn là sysadmin thì cũng sẽ rất khó để bạn thấy được tại sao cần phải học lý thuyết automata.

Những gì tôi nói lan man ở trên có thể tóm gọn lại thế này:

<ul>
    <li>Học dựa theo chương trình đại học. Nếu bạn đang học đại học các ngành công nghệ thông tin, khoa học máy tính hay toán tin thì nên tập trung vào việc học các môn trong trường. Các học liệu trong phần 4 cũng được soạn theo các đại học lớn trên thế giới.</li>
    <li>Học kiến thức căn bản thật vững (cái gì là căn bản thì xem phần 4), những món còn lại khi nào cần (căn cứ vào nhu cầu công việc) thì hẵng học.</li>
    <li>Tìm dự án lề (side project) mà bạn thích để làm để có thể nhanh chóng nhận ra những mảng kiến thức còn thiếu.</li>
    <li>Thời điểm tốt nhất để học một cái gì đó là khi bạn đang là sinh viên. Thời điểm tốt thứ hai là ngay bây giờ!</li>
</ul>

<div>
<div>

Các lớp mà tôi liệt kê trong phần 4 đa số là của đại học Stanford. Bạn không cần phải đến tận nơi, ngồi trong lớp mới có thể học được. Tôi thấy trong nhiều trường hợp thì bạn chỉ cần đọc lecture notes, sách giáo khoa mà lớp sử dụng rồi làm bài tập đầy đủ thì vẫn sẽ tiếp thu đủ kiến thức. Một số lớp mà tôi liệt kê dưới đây được dạy miễn phí rộng rãi trên <a href="https://www.coursera.org/">Coursera</a>.

Bạn có thể tham khảo chương trình <a href="http://scpd.stanford.edu/">SCPD</a> nếu muốn học chung với các sinh viên Stanford khác. Đây là chương trình học từ xa thông qua video. Buổi sáng lớp diễn ra thì buổi chiều bạn đã có video để xem. Thi cử như các sinh viên chính quy khác và điểm phải trên B mới được học tiếp. Đây là chương trình mà tôi theo học. Điểm thú vị là mỗi học kỳ bạn chỉ cần lấy một lớp, nhưng Stanford vẫn sẽ cho bạn xem video của tất cả các lớp khác.

Ngoài Stanford và Coursera ra, bạn cũng có thể tham khảo các lớp trên <a href="http://www.udacity.com/">Udacity</a>, <a href="http://ocw.mit.edu/index.htm">OCW</a> và <a href="http://mitx.mit.edu/">MITx</a>. Khi tôi đang viết những dòng này thì MIT và Harvard công bố dự án <a href="http://web.mit.edu/press/2012/mit-harvard-edx-announcement.html">edX</a>. Chúng ta đang sống trong một thời đại cực kỳ thú vị! Bây giờ chỉ cần bạn chịu học thì muốn học cái gì cũng có lớp và học liệu miễn phí. Nhưng mà học cái gì bây giờ?

</div>
</div>

<div></div>

<b>4 Học cái gì?</b>

Có ba món quan trọng cần phải học: lập trình, lập trình và lập trình! Để làm việc được trong ngành này, bạn phải yêu thích lập trình. Không có cách nào khác. Thề luôn!

Tôi dành khá nhiều thời gian tìm hiểu giáo trình khoa học máy tính của các trường đại học lớn trên thế giới và tôi thấy tất cả các môn học đều có phần bài tập là lập trình. Học cái gì viết phần mềm cho cái đó. Học về hệ %";s:10:"post_title";s:40:"Làm an toàn thông tin thì học gì?";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:32:"lam-an-toan-thong-tin-thi-hoc-gi";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-11 16:16:45";s:17:"post_modified_gmt";s:19:"2016-08-11 09:16:45";s:21:"post_content_filtered";s:19308:"<h2><b>1 Giới thiệu</b></h2>
Tôi nhận được thư từ của nhiều bạn hỏi về việc nên học gì và như thế nào để có thể tìm được việc làm và làm được việc trong ngành an toàn thông tin (information security). Tôi nghĩ việc đầu tiên bạn cần phải làm là in toàn bộ bài viết "<a href="http://www.hvaonline.net/hvaonline/posts/list/621.hva">Làm thế nào để trở thành white hat hacker</a>" ra giấy, nhưng đừng đọc, mà hãy để chúng trong toilet khi nào cần thì xài dần.

Quay trở lại câu hỏi. An toàn thông tin là một ngành rộng lớn với rất nhiều lĩnh vực. Những gì tôi biết và làm được chỉ gói gọn trong một hai lĩnh vực. Có rất nhiều mảng kiến thức cơ bản mà tôi không nắm vững và cũng có nhiều kỹ năng mà tôi không thạo. Hack tài khoản Yahoo! Mail là một trong số đó. Tôi cũng không biết cách tìm địa chỉ IP của bạn chat :-(.

Xét theo <a href="http://www.procul.org/blog/2005/09/01/nnm-m%E1%BB%A9c-ngu-d%E1%BB%91t/">năm mức ngu dốt</a> thì tôi nằm ở mức "1OI - thiếu kiến thức" ở hầu hết các lĩnh vực trong an toàn thông tin. Cũng có lĩnh vực tôi nằm ở mức "2OI - thiếu nhận thức". Nhiều lần đọc sách vở hoặc nói chuyện với đồng nghiệp, tôi hay nhận ra rằng có nhiều thứ tôi không biết là tôi không biết. Theo ý của anh Ngô Quang Hưng thì đây là chuyện bình thường:
<blockquote class="tr_bq">Dân máy tính thường phải đọc/học rất nhiều để theo kịp sự phát triển với tốc độ ánh sáng của ngành mình. Trong quá trình này, với mỗi vấn đề X của ngành, ta sẽ chuyển dần dần từ 3OI xuống 1OI. Sau đó, nếu X là cái mà ta thật sự thích hoặc cần cho công việc thì sẽ chuyển nó lên 0OI.</blockquote>
<blockquote class="tr_bq">Rất nhiều sinh viên và nghiên cứu sinh KHMT ở mức 3OI khi mới bắt đầu đi học. Sau đó họ tìm hiểu về quá trình nghiên cứu, quá trình tìm các vấn đề và hướng nghiên cứu mới, quá trính cập nhật kiến thức về ngành của mình, và chuyển dần các thứ lên 2OI. Để có một quá trình hiệu quả từ 3OI lên 2OI không dễ chút nào. Ví dụ đơn giản: các journals, conference nào trong ngành mình là có giá trị, làm thế nào để tìm đọc các bài trong chúng, phương pháp lọc bài đọc thế nào, vân vân.</blockquote>
Tôi thấy anh Hưng nói có lý, nên mục tiêu chính của bài viết này là cung cấp một quá trình hiệu quả để bớt ngu về an toàn thông tin.

<b>2 Làm an toàn thông tin là làm gì?</b>

Tôi muốn viết phần này vì nhiều người tưởng tôi làm bảo vệ khi tôi nói tôi làm security. Ngoài ra có lẽ là do thị trường việc làm an toàn thông tin ở Việt Nam không phong phú nên hầu hết đều nghĩ rằng làm an toàn thông tin nghĩa là đảm bảo an toàn hệ thống mạng (network/system security), trong khi thực tế đây chỉ là một trong số rất nhiều công việc trong ngành.

Trong bốn phần nhỏ tiếp theo, tôi sẽ giới thiệu bốn nhóm công việc chính trong ngành. Đối với mỗi nhóm công việc, tôi sẽ bàn một chút về triển vọng nghề nghiệp ở Việt Nam và Mỹ, hai nơi mà tôi có dịp được quan sát. Nếu bạn không biết bạn thích làm gì thì cứ chọn một công việc rồi làm thử. Các công việc này đều có liên quan nhau, nên kiến thức mà bạn học được trong quá trình thử vẫn hữu ích cho những nghề khác.

<i>2.1 An toàn sản phẩm (product security)</i>

Công việc chính của nhóm này là làm việc với các đội phát triển sản phẩm để đảm bảo sản phẩm làm ra an toàn cho người dùng và an toàn cho hệ thống của công ty, cụ thể là:
<ul>
 	<li>Kiểm định mã nguồn và thiết kế của sản phẩm</li>
 	<li>Phát triển các giải pháp kỹ thuật và quy trình phát triển phần mềm an toàn để phát hiện và ngăn chặn những kỹ thuật tấn công đã biết</li>
 	<li>Đào tạo nhân lực để nâng cao nhận thức về an toàn thông tin cũng như kỹ năng viết mã an toàn</li>
 	<li>Nghiên cứu các hướng tấn công mới có thể ảnh hưởng hệ thống sản phẩm và dịch vụ của công ty</li>
</ul>
<div>Tóm gọn lại thì nhóm này chuyên <a href="http://vnhacker.blogspot.com/2011/11/tim-lo-lay-tien.html">tìm lỗ hổng</a> và kỹ thuật tấn công mới. Đây là công việc của tôi và tôi thấy đây là công việc thú vị nhất trong ngành :-).</div>
<div></div>
<div>Ở Mỹ thì thông thường thì chỉ có các hãng có phần mềm và dịch vụ lớn như Facebook, Google, Microsoft, Oracle, v.v. hay các tập đoàn tài chính ngân hàng lớn mới có đội ngũ tại chỗ để đảm nhiệm công việc này. Các công ty nhỏ thường chỉ thuê dịch vụ của các công ty tư vấn. IBM và Big Four đều có cung cấp dịch vụ tư vấn này. Dẫu vậy nếu được chọn lựa thì tôi sẽ chọn làm cho các công ty chuyên sâu như Matasano, iSec, Leviathan, Gotham, IOActive, Immunity, v.v.</div>
<div></div>
<div>Ở Việt Nam thì thị trường việc làm cho người làm an toàn sản phẩm có vẻ ảm đạm hơn. Cho đến nay tôi biết chỉ có một vài công ty ở Việt Nam là có nhân viên chuyên trách lĩnh vực này. Các công ty khác (nếu có quan tâm đến an toàn thông tin) thì hầu như chỉ tập trung vào an toàn vận hành. Các công ty tư vấn an toàn thông tin ở Việt Nam cũng không tư vấn an toàn sản phẩm, mà chỉ tập trung tư vấn chung chung về các quy trình và tiêu chuẩn an toàn thông tin.</div>
<div></div>
<i>2.2 An toàn vận hành (operations security)</i>

Công việc chính của nhóm này là đảm bảo sự an toàn cho toàn bộ hệ thống thông tin của doanh nghiệp, với ba nhiệm vụ chính:
<ul>
 	<li>Ngăn chặn: đưa ra các chính sách, quy định, hướng dẫn về an toàn vận hành; kiện toàn toàn bộ hệ thống thông tin, từ các vành đai cho đến máy tính của người dùng cuối; cấp và thu hồi quyền truy cập hệ thống; quét tìm lỗ hổng trong hệ thống, theo dõi thông tin lỗ hổng mới và làm việc với các bên liên quan để vá lỗi, v.v.</li>
 	<li>Theo dõi và phát hiệ: <a href="http://vnhacker.blogspot.com/2009/12/giam-sat-ninh-mang-hay-la-lam-nao-e.html">giám sát an ninh mạng</a>.</li>
 	<li>Xử lý: phản hồi (incident response) và điều tra số (digital forensics) khi xảy ra sự cố an toàn thông tin, từ tài khoản của nhân viên bị đánh cắp, rò rỉ thông tin sản phẩm mới cho đến tấn công từ chối dịch vụ.</li>
</ul>
Đây là công việc khó nhất, nhưng lại ít <a href="http://vnhacker.blogspot.com/2007/01/phn-thng-no-dnh-cho-ngi-lm-bo-mt.html">phần thưởng</a> nhất của ngành an toàn thông tin.

Tương tự như trên, chỉ có các hãng lớn của Mỹ mới có đội ngũ tại chỗ để phụ trách toàn bộ khối lượng công việc đồ sộ này, nhất là mảng xử lý và điều tra. Đa số các công ty chỉ tập trung vào ngăn chặn và sử dụng dịch vụ của bên thứ ba cho hai mảng còn lại. Các hãng như Mandiant, Netwitness hay HBGary cung cấp dịch vụ điều tra các vụ xâm nhập và có rất nhiều hãng khác cung cấp dịch vụ giám sát an ninh mạng.

Ở Việt Nam thì thị trường việc làm cho người làm an toàn vận hành tương đối phong phú hơn so với an toàn sản phẩm. Các công ty và tổ chức tài chính lớn đều có một vài vị trí chuyên trách về an toàn vận hành. Đa số người làm về an toàn thông tin ở Việt Nam mà tôi biết là làm trong lĩnh vực này. Dẫu vậy hầu như chưa có ai và công ty tư vấn nào làm về phản hồi và điều tra sự cố.

<i>2.3 Phát triển công cụ (applied security)</i>

Công việc chính của nhóm này là phát triển và cung cấp các công cụ, dịch vụ và thư viện phần mềm có liên quan đến an toàn thông tin cho các nhóm phát triển sản phẩm sử dụng lại.

Nhóm này bao gồm các kỹ sư nhiều năm kinh nghiệm và có kiến thức vững chắc về an toàn thông tin, viết mã an toàn và mật mã học. Họ phát triển các thư viện và dịch vụ dùng chung như phân tích mã tĩnh - phân tích mã động (static - dynamic code analysis), hộp cát (sandboxing), xác thực (authentication), kiểm soát truy cập (authorization), mã hóa (encryption) và quản lý khóa (key management), v.v.

Đây là dạng công việc dành cho những ai đang viết phần mềm chuyên nghiệp và muốn chuyển qua làm về an toàn thông tin. Đây cũng là công việc của những người thích làm an toàn sản phẩm nhưng muốn tập trung vào việc xây dựng sản phẩm hơn là tìm lỗ hổng.

Rõ ràng loại công việc này chỉ xuất hiện ở các công ty phần mềm lớn. Ở các công ty phần mềm nhỏ hơn thì các kỹ sư phần mềm thường phải tự cáng đáng công việc này mà ít có sự hỗ trợ từ nguồn nào khác. Ở Việt Nam thì tôi không biết có ai làm dạng công việc này không.

<i>2.4 Tìm diệt mã độc và các nguy cơ khác (threat analysis)</i>

Ngoài an toàn sản phẩm ra thì đây là một lĩnh vực mà tôi muốn làm. Công việc chính của nhóm này là phân tích, truy tìm nguồn gốc và tiêu diệt tận gốc mã độc và các tấn công có chủ đích (targeted attack). Mã độc ở đây có thể là virút, sâu máy tính, hay mã khai thác các lỗ hổng đã biết hoặc chưa được biết đến mà phần mềm diệt virút thông thường chưa phát hiện được. Các loại mã độc này thường được sử dụng trong các tấn công có chủ đích vào <a href="http://googleblog.blogspot.com/2010/01/new-approach-to-china.html">doanh nghiệp</a>.

Tôi nghĩ rằng sau hàng loạt vụ tấn công vừa rồi thì chắc hẳn các công ty lớn với nhiều tài sản trí tuệ giá trị đều muốn có những chuyên gia trong lĩnh vực này trong đội ngũ của họ. Ngoài ra các công ty chuyên về điều tra và xử lý sự cố như Mandiant, HBGary hay Netwitness mà tôi đề cập ở trên đều đang ăn nên làm ra và lúc nào cũng cần người. Các công ty sản xuất phần mềm diệt virút dĩ nhiên cũng là một lựa chọn.

Ở Việt Nam thì tôi nghĩ hầu hết doanh nghiệp vẫn chưa thấy được nguy cơ đến từ các cuộc tấn công có chủ đích, thành ra họ sẽ không tuyển người chuyên trách vấn đề này. Tôi cũng không biết có công ty tư vấn nào ở Việt Nam chuyên về điều tra và xử lý sự cố hay không. Tôi nghĩ lựa chọn khả dĩ nhất cho những người thích mảng công việc này là các công ty phần mềm diệt virút.

Tuy nhiên cũng cần lưu ý rằng trong vài năm gần đây ở <a href="http://googleonlinesecurity.blogspot.com/2010/03/chilling-effects-of-malware.html">Việt Nam</a> còn xuất hiện những loại mã độc nhắm vào đông đảo người dùng máy tính bình thường. Vấn nạn này có lẽ sẽ còn kéo dài trong nhiều năm tới và lẽ đương nhiên "phe ta" lúc nào cũng cần thêm những chiến sĩ lành nghề như anh <a href="http://www.hvaonline.net/hvaonline/posts/list/38818.hva">TQN</a>. Thành ra dẫu triển vọng nghề nghiệp không sáng sủa cho lắm, nhưng tôi rất hi vọng sẽ ngày càng nhiều người tham gia vào việc phân tích các mã độc nhắm vào người dùng máy tính ở Việt Nam. Đối với tôi họ là những người hùng thầm lặng, chiến đấu đêm ngày với các "thế lực thù địch" để bảo vệ tất cả chúng ta.

<b>3 Học như thế nào?</b>

Đa số những bạn viết thư cho tôi đều đang học đại học ngành CNTT và tất cả đều than rằng chương trình học quá chán, không có những thứ mà các bạn muốn học. Tôi nghĩ đây là một ngộ nhận.

Hối tiếc lớn thứ nhì trong sự nghiệp học tập mấy chục năm của tôi là đã không học nghiêm túc khi còn là sinh viên (hối tiếc lớn nhất là tôi đã không nghỉ hẳn, nhưng đó là một câu chuyện dài khác). Tôi cũng đã nghĩ rằng chương trình học ở đại học là lạc hậu và không cần thiết. Bây giờ nhìn lại thì tôi thấy nội dung và cách dạy của từng môn học thì đúng là lạc hậu (chỉ có mấy môn triết học Mác-Lênin là bắt kịp <a href="http://www.ou.edu.vn/dtn/Pages/Moi-ban-tham-gia-cuoc-thi-Anh-sang-thoi-dai-2012.aspx">ánh sáng thời đại</a>), nhưng toàn bộ giáo trình đại học vẫn cung cấp được một cái sườn kiến thức rất cần thiết cho một kỹ sư an toàn thông tin.

Ở đại học người ta có cách tiếp cận top-down, nghĩa là dạy từ đầu đến cuối những kiến thức nằm trong chương trình. Điều này dễ dẫn đến tình trạng là người học phải học những kiến thức mà họ không thấy cần thiết. Nếu chương trình học cũ kỹ và không có nhiều thực hành, hoặc người dạy không chỉ ra được bức tranh toàn cảnh, vị trí hiện tại của người học và bước tiếp theo họ nên làm là gì thì người học sẽ dễ cảm thấy rằng họ đang phí thời gian học những kiến thức vô bổ.

Trong khi khi đi làm thì cách tiếp cận là bottom-up, nghĩa là lao vào làm, thấy thiếu kiến thức chỗ nào thì học để bù vào chỗ đó. Lúc này tôi hoàn toàn chủ động trong việc học và tôi cũng hiểu rõ tôi cần học cái gì và tại sao. Điều thú vị là mỗi khi truy ngược lại nguồn gốc của những kiến thức tôi cần phải có, tôi thường thấy chúng nằm trong chương trình đại học.

Ví dụ như tôi muốn luyện kỹ năng dịch ngược mã phần mềm (reverse code engineering - RCE) thì tôi thấy rằng tôi cần phải có kiến thức về tổ chức và cấu trúc máy tính. Hoặc nếu tôi muốn học về mật mã học thì tôi phải học lý thuyết tính toán, mà khởi nguồn là lý thuyết automata. Nhưng tại sao trước đó tôi cũng đi làm nhưng không thấy được những lỗ hổng kiến thức này? Tôi nghĩ là do tôi làm không đủ sâu. Ví dụ như nếu bạn suốt ngày chỉ lập trình PHP thì bạn sẽ không thể hiểu được tại sao phải nắm vững tổ chức và kiến trúc máy tính. Hoặc giả như công việc của bạn là sysadmin thì cũng sẽ rất khó để bạn thấy được tại sao cần phải học lý thuyết automata.

Những gì tôi nói lan man ở trên có thể tóm gọn lại thế này:
<ul>
 	<li>Học dựa theo chương trình đại học. Nếu bạn đang học đại học các ngành công nghệ thông tin, khoa học máy tính hay toán tin thì nên tập trung vào việc học các môn trong trường. Các học liệu trong phần 4 cũng được soạn theo các đại học lớn trên thế giới.</li>
 	<li>Học kiến thức căn bản thật vững (cái gì là căn bản thì xem phần 4), những món còn lại khi nào cần (căn cứ vào nhu cầu công việc) thì hẵng học.</li>
 	<li>Tìm dự án lề (side project) mà bạn thích để làm để có thể nhanh chóng nhận ra những mảng kiến thức còn thiếu.</li>
 	<li>Thời điểm tốt nhất để học một cái gì đó là khi bạn đang là sinh viên. Thời điểm tốt thứ hai là ngay bây giờ!</li>
</ul>
<div>
<div>

Các lớp mà tôi liệt kê trong phần 4 đa số là của đại học Stanford. Bạn không cần phải đến tận nơi, ngồi trong lớp mới có thể học được. Tôi thấy trong nhiều trường hợp thì bạn chỉ cần đọc lecture notes, sách giáo khoa mà lớp sử dụng rồi làm bài tập đầy đủ thì vẫn sẽ tiếp thu đủ kiến thức. Một số lớp mà tôi liệt kê dưới đây được dạy miễn phí rộng rãi trên <a href="https://www.coursera.org/">Coursera</a>.

Bạn có thể tham khảo chương trình <a href="http://scpd.stanford.edu/">SCPD</a> nếu muốn học chung với các sinh viên Stanford khác. Đây là chương trình học từ xa thông qua video. Buổi sáng lớp diễn ra thì buổi chiều bạn đã có video để xem. Thi cử như các sinh viên chính quy khác và điểm phải trên B mới được học tiếp. Đây là chương trình mà tôi theo học. Điểm thú vị là mỗi học kỳ bạn chỉ cần lấy một lớp, nhưng Stanford vẫn sẽ cho bạn xem video của tất cả các lớp khác.

Ngoài Stanford và Coursera ra, bạn cũng có thể tham khảo các lớp trên <a href="http://www.udacity.com/">Udacity</a>, <a href="http://ocw.mit.edu/index.htm">OCW</a> và <a href="http://mitx.mit.edu/">MITx</a>. Khi tôi đang viết những dòng này thì MIT và Harvard công bố dự án <a href="http://web.mit.edu/press/2012/mit-harvard-edx-announcement.html">edX</a>. Chúng ta đang sống trong một thời đại cực kỳ thú vị! Bây giờ chỉ cần bạn chịu học thì muốn học cái gì cũng có lớp và học liệu miễn phí. Nhưng mà học cái gì bây giờ?

</div>
</div>
<div></div>
<b>4 Học cái gì?</b>

Có ba món quan trọng cần phải học: lập trình, lập trình và lập trình! Để làm việc được trong ngành này, bạn phải yêu thích lập trình. Không có cách nào khác. Thề luôn!

Tôi dành khá nhiều thời gian tìm hiểu giáo trình khoa học máy tính của các trường đại học lớn trên thế giới và tôi thấy tất cả các môn học đều có phần bài tập là lập trình. Học cái gì viết phần mềm cho cái đó. Học về hệ %";s:11:"post_parent";s:1:"0";s:4:"guid";s:25:"http://reactvn.net/?p=528";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:3;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19248;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:40;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:6;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:6;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:32;s:6:"length";i:800;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:19308;s:6:"length";i:4294967295;s:9:"charsetnr";i:45;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:25;s:6:"length";i:1020;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:45;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:45;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:13:"reactvn_posts";s:8:"orgtable";s:13:"reactvn_posts";s:3:"def";s:0:"";s:2:"db";s:14:"zadmin_reactvn";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}